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

class ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem();
        if (\array_key_exists('chance', $data) && \is_int($data['chance'])) {
            $data['chance'] = (float) $data['chance'];
        }
        if (\array_key_exists('max_level', $data) && \is_int($data['max_level'])) {
            $data['max_level'] = (float) $data['max_level'];
        }
        if (\array_key_exists('min_level', $data) && \is_int($data['min_level'])) {
            $data['min_level'] = (float) $data['min_level'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('chance', $data)) {
            $object->setChance($data['chance']);
            unset($data['chance']);
        }
        if (\array_key_exists('condition_values', $data)) {
            $values = [];
            foreach ($data['condition_values'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem::class, 'json', $context);
            }
            $object->setConditionValues($values);
            unset($data['condition_values']);
        }
        if (\array_key_exists('max_level', $data)) {
            $object->setMaxLevel($data['max_level']);
            unset($data['max_level']);
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($this->denormalizer->denormalize($data['method'], \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod::class, 'json', $context));
            unset($data['method']);
        }
        if (\array_key_exists('min_level', $data)) {
            $object->setMinLevel($data['min_level']);
            unset($data['min_level']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['chance'] = $data->getChance();
        $values = [];
        foreach ($data->getConditionValues() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['condition_values'] = $values;
        $dataArray['max_level'] = $data->getMaxLevel();
        $dataArray['method'] = $this->normalizer->normalize($data->getMethod(), 'json', $context);
        $dataArray['min_level'] = $data->getMinLevel();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class => false];
    }
}
