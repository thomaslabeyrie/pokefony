<?php

namespace App\Generated\PokeApi\Normalizer;

use App\Generated\PokeApi\Runtime\Normalizer\CheckArray;
use App\Generated\PokeApi\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TypeDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\TypeDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\TypeDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\TypeDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('damage_relations', $data)) {
            $object->setDamageRelations($this->denormalizer->denormalize($data['damage_relations'], \App\Generated\PokeApi\Model\TypeDetailDamageRelations::class, 'json', $context));
            unset($data['damage_relations']);
        }
        if (\array_key_exists('past_damage_relations', $data)) {
            $values = [];
            foreach ($data['past_damage_relations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItem::class, 'json', $context);
            }
            $object->setPastDamageRelations($values);
            unset($data['past_damage_relations']);
        }
        if (\array_key_exists('game_indices', $data)) {
            $values_1 = [];
            foreach ($data['game_indices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\TypeGameIndex::class, 'json', $context);
            }
            $object->setGameIndices($values_1);
            unset($data['game_indices']);
        }
        if (\array_key_exists('generation', $data)) {
            $object->setGeneration($this->denormalizer->denormalize($data['generation'], \App\Generated\PokeApi\Model\GenerationSummary::class, 'json', $context));
            unset($data['generation']);
        }
        if (\array_key_exists('move_damage_class', $data)) {
            $object->setMoveDamageClass($this->denormalizer->denormalize($data['move_damage_class'], \App\Generated\PokeApi\Model\MoveDamageClassSummary::class, 'json', $context));
            unset($data['move_damage_class']);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = [];
            foreach ($data['names'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\AbilityName::class, 'json', $context);
            }
            $object->setNames($values_2);
            unset($data['names']);
        }
        if (\array_key_exists('pokemon', $data)) {
            $values_3 = [];
            foreach ($data['pokemon'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\TypeDetailPokemonItem::class, 'json', $context);
            }
            $object->setPokemon($values_3);
            unset($data['pokemon']);
        }
        if (\array_key_exists('moves', $data)) {
            $values_4 = [];
            foreach ($data['moves'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\MoveSummary::class, 'json', $context);
            }
            $object->setMoves($values_4);
            unset($data['moves']);
        }
        if (\array_key_exists('sprites', $data)) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['sprites'] as $key => $value_5) {
                $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_5 as $key_1 => $value_6) {
                    $values_6[$key_1] = $this->denormalizer->denormalize($value_6, \App\Generated\PokeApi\Model\TypeDetailSpritesItemItem::class, 'json', $context);
                }
                $values_5[$key] = $values_6;
            }
            $object->setSprites($values_5);
            unset($data['sprites']);
        }
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_7;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['generation'] = $this->normalizer->normalize($data->getGeneration(), 'json', $context);
        $dataArray['move_damage_class'] = $this->normalizer->normalize($data->getMoveDamageClass(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\TypeDetail::class => false];
    }
}
