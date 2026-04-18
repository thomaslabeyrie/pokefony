<?php

namespace App\PokeApiClient\DTO\Type;

use App\PokeApiClient\DTO\Common\GenerationGameIndexDTO;
use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeDTO implements PokeApiEndpointDtoInterface
{
    public int $id;

    public string $name;

    #[SerializedName('damage_relations')]
    public TypeRelationsDTO $damageRelations;

    /** @var TypeRelationsPastDTO[] */
    #[SerializedName('past_damage_relations')]
    public array $pastDamageRelations;

    /** @var GenerationGameIndexDTO[] */
    #[SerializedName('game_indices')]
    public array $gameIndices;

    public NamedResourceDTO $generation;

    #[SerializedName('move_damage_class')]
    public NamedResourceDTO $moveDamageClass;

    /** @var TypePokemonDTO[] */
    public array $pokemon;

    /** @var NamedResourceDTO[] */
    public array $moves;

    public static function getEndpoint(): string
    {
        return 'type';
    }
}
