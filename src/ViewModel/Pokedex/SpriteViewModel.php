<?php

namespace App\ViewModel\Pokedex;

class SpriteViewModel
{
    private string $url;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): SpriteViewModel
    {
        $this->url = $url;
        return $this;
    }
}
