<?php

namespace App\DTO\Common;

use Symfony\Component\Serializer\Attribute\Groups;

class NamedResourceDTO
{
    #[Groups(['pokemon', 'pokedex'])]
    private string $name;

    #[Groups(['pokemon'])]
    private string $url;

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
