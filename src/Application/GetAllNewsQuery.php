<?php

namespace Context\Application;

use Context\Services\NewService;

final class GetAllNewsQuery
{

    public function __construct(private readonly NewService $newService)
    {
    }

    public function execute(string $q, int $page)
    {
        return $this->newService->getEverything($q, $page);
    }
}
