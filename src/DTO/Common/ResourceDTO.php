<?php

namespace App\DTO\Common;

class ResourceDTO
{
    private string $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
