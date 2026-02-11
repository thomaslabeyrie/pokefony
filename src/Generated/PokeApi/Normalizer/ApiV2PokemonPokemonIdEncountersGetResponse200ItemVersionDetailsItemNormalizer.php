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
class ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem();
        if (\array_key_exists('max_chance', $data) && \is_int($data['max_chance'])) {
            $data['max_chance'] = (double) $data['max_chance'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('encounter_details', $data)) {
            $values = [];
            foreach ($data['encounter_details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class, 'json', $context);
            }
            $object->setEncounterDetails($values);
            unset($data['encounter_details']);
        }
        if (\array_key_exists('max_chance', $data)) {
            $object->setMaxChance($data['max_chance']);
            unset($data['max_chance']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion::class, 'json', $context));
            unset($data['version']);
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
        $values = [];
        foreach ($data->getEncounterDetails() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['encounter_details'] = $values;
        $dataArray['max_chance'] = $data->getMaxChance();
        $dataArray['version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class => false];
    }
}