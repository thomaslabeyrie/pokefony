<?php

namespace App\DTO\ApiType;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeRelationsPastDTO
{
    private NamedResourceDTO $generation;

    #[SerializedName('damage_relations')]
    private TypeRelationsDTO $damageRelations;

    public function getGeneration(): NamedResourceDTO
    {
        return $this->generation;
    }

    public function setGeneration(NamedResourceDTO $generation): self
    {
        $this->generation = $generation;
        return $this;
    }

    public function getDamageRelations(): TypeRelationsDTO
    {
        return $this->damageRelations;
    }

    public function setDamageRelations(TypeRelationsDTO $damageRelations): self
    {
        $this->damageRelations = $damageRelations;
        return $this;
    }
}
