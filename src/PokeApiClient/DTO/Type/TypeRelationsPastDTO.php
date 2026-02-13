<?php

namespace App\PokeApiClient\DTO\Type;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeRelationsPastDTO
{
    public NamedResourceDTO $generation;

    #[SerializedName('damage_relations')]
    public TypeRelationsDTO $damageRelations;
}
