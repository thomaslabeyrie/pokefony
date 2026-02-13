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

class StatDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\StatDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\StatDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\StatDetail();
        if (\array_key_exists('is_battle_only', $data) && \is_int($data['is_battle_only'])) {
            $data['is_battle_only'] = (bool) $data['is_battle_only'];
        }
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
        if (\array_key_exists('game_index', $data)) {
            $object->setGameIndex($data['game_index']);
            unset($data['game_index']);
        }
        if (\array_key_exists('is_battle_only', $data)) {
            $object->setIsBattleOnly($data['is_battle_only']);
            unset($data['is_battle_only']);
        }
        if (\array_key_exists('affecting_moves', $data)) {
            $object->setAffectingMoves($this->denormalizer->denormalize($data['affecting_moves'], \App\Generated\PokeApi\Model\StatDetailAffectingMoves::class, 'json', $context));
            unset($data['affecting_moves']);
        }
        if (\array_key_exists('affecting_natures', $data)) {
            $object->setAffectingNatures($this->denormalizer->denormalize($data['affecting_natures'], \App\Generated\PokeApi\Model\StatDetailAffectingNatures::class, 'json', $context));
            unset($data['affecting_natures']);
        }
        if (\array_key_exists('characteristics', $data)) {
            $values = [];
            foreach ($data['characteristics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\CharacteristicSummary::class, 'json', $context);
            }
            $object->setCharacteristics($values);
            unset($data['characteristics']);
        }
        if (\array_key_exists('move_damage_class', $data)) {
            $object->setMoveDamageClass($this->denormalizer->denormalize($data['move_damage_class'], \App\Generated\PokeApi\Model\MoveDamageClassSummary::class, 'json', $context));
            unset($data['move_damage_class']);
        }
        if (\array_key_exists('names', $data)) {
            $values_1 = [];
            foreach ($data['names'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\StatName::class, 'json', $context);
            }
            $object->setNames($values_1);
            unset($data['names']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['game_index'] = $data->getGameIndex();
        if ($data->isInitialized('isBattleOnly') && null !== $data->getIsBattleOnly()) {
            $dataArray['is_battle_only'] = $data->getIsBattleOnly();
        }
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
        return [\App\Generated\PokeApi\Model\StatDetail::class => false];
    }
}
