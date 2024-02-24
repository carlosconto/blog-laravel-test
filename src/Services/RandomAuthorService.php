<?php

declare(strict_types=1);

namespace Context\Services;

use Context\Models\Author;
use Illuminate\Support\Facades\Http;

final class RandomAuthorService
{

    private string $url;

    public function __construct()
    {
        $this->url = env('RND_USER_API_URL');
    }


    public function getAuthor() : Author
    {
        return $this->setAuthor();
    }

    private function setAuthor() : Author
    {
        $request = Http::get($this->url);

        $result = $request->object()?->results[0];

        return Author::fromArray(
            name: $result->name->title . ' ' . $result->name->first . ' ' . $result->name->last, 
            email: $result->email,
            urlImage: $result->picture->large,
            gender: $result->gender
        );
    }
}
