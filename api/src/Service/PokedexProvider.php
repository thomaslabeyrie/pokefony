<?php

namespace App\Service;

use Symfony\Contracts\Cache\CacheInterface;

class PokedexProvider
{
    public function __construct(
        private CacheInterface $cache,
    ) {}

    public function get(string $key, callable $callback): mixed
    {
        return $this->cache->get($key, $callback);
    }
}
