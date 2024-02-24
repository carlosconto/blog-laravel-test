<?php

declare(strict_types=1);


namespace Context\Services;

use Context\Models\Article;
use Context\Models\Source;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

final class NewService
{
    // https://newsapi.org/docs
    private string $apiKey;

    // https://newsapi.org/docs
    private string $apiUrl;

    private Collection $articles;

    public function __construct(private readonly RandomAuthorService $randomAuthorService)
    {
        $this->apiKey = env('RND_NEWS_APIKEY');
        $this->apiUrl = env('RND_NEWS_APIURL');
    }

    public function getEverything(string $query, int $page = 1): LengthAwarePaginator
    {
        $response = Http::get($this->apiUrl, [
            'q' => $query,
            'pageSize' => 10,
            'page' => $page,
            'apiKey' => $this->apiKey,
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to get news');
        }

        //creamos una coleccion de articulos y los paginamos
        $this->articles = (new Collection($response->object()->articles))->map(fn ($article) => $this->setArticle($article));

        return $this->articles->paginate(10, $page, $response->object()->totalResults);
    }

    private function setArticle($article): Article
    {
        return new Article(
            source: new Source(
                name: $article->source?->name ?? '--',
                id: $article->source?->id ?? '--'
            ),
            author: $this->randomAuthorService->getAuthor(),
            title: $article->title,
            description: $article->description,
            url: $article->url,
            urlToImage: $article?->urlToImage,
            publishedAt: $article->publishedAt,
            content: $article->content
        );
    }
}
