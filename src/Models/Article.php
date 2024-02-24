<?php

declare(strict_types=1);

namespace Context\Models;

class Article
{
    private Source $source;

    private Author $author;

    private string $title;

    private string $description;

    private string $url;

    private ?string $urlToImage;

    private string $publishedAt;

    private string $content;

    public function __construct(
        Source $source,
        Author $author,
        string $title,
        string $description,
        string $url,
        ?string $urlToImage,
        string $publishedAt,
        string $content
    ) {
        $this->source = $source;
        $this->author = $author;
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->urlToImage = $urlToImage;
        $this->publishedAt = $publishedAt;
        $this->content = $content;
    }

    public function getSource(): Source
    {
        return $this->source;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getUrlToImage(): ?string
    {
        return $this->urlToImage;
    }

    public function getPublishedAt(): string
    {
        return $this->publishedAt;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function toArray(): array
    {
        return [
            'source' => $this->source->toArray(),
            'author' => $this->author->toArray(),
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'urlToImage' => $this->urlToImage,
            'publishedAt' => $this->publishedAt,
            'content' => $this->content            
        ];
    }
}
