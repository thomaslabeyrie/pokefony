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
class LocationAreaDetailPokemonEncountersItemVersionDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion::class, 'json', $context));
            unset($data['version']);
        }
        if (\array_key_exists('max_chance', $data)) {
            $object->setMaxChance($data['max_chance']);
            unset($data['max_chance']);
        }
        if (\array_key_exists('encounter_details', $data)) {
            $object->setEncounterDetails($this->denormalizer->denormalize($data['encounter_details'], \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class, 'json', $context));
            unset($data['encounter_details']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        $dataArray['max_chance'] = $data->getMaxChance();
        $dataArray['encounter_details'] = $this->normalizer->normalize($data->getEncounterDetails(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class => false];
    }
}