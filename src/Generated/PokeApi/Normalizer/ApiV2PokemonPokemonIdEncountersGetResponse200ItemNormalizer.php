<?php

namespace App\Generated\PokeApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use App\Generated\PokeApi\Runtime\Normalizer\CheckArray;
use App\Generated\PokeApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiV2PokemonPokemonIdEncountersGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location_area', $data)) {
            $object->setLocationArea($this->denormalizer->denormalize($data['location_area'], \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea::class, 'json', $context));
            unset($data['location_area']);
        }
        if (\array_key_exists('version_details', $data)) {
            $values = [];
            foreach ($data['version_details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class, 'json', $context);
            }
            $object->setVersionDetails($values);
            unset($data['version_details']);
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
        $dataArray['location_area'] = $this->normalizer->normalize($data->getLocationArea(), 'json', $context);
        $values = [];
        foreach ($data->getVersionDetails() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['version_details'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class => false];
    }
}