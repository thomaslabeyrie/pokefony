<?php

namespace App\Generated\PokeApi\Model;

class AbilityFlavorText extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $flavorText;
    /**
     * @var LanguageSummary
     */
    protected $language;
    /**
     * @var VersionGroupSummary
     */
    protected $versionGroup;

    public function getFlavorText(): string
    {
        return $this->flavorText;
    }

    public function setFlavorText(string $flavorText): self
    {
        $this->initialized['flavorText'] = true;
        $this->flavorText = $flavorText;

        return $this;
    }

    public function getLanguage(): LanguageSummary
    {
        return $this->language;
    }

    public function setLanguage(LanguageSummary $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getVersionGroup(): VersionGroupSummary
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(VersionGroupSummary $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }
}
