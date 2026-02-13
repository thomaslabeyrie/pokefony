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

class PokemonDetailMovesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PokemonDetailMovesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('move', $data)) {
            $object->setMove($this->denormalizer->denormalize($data['move'], \App\Generated\PokeApi\Model\PokemonDetailMovesItemMove::class, 'json', $context));
            unset($data['move']);
        }
        if (\array_key_exists('version_group_details', $data)) {
            $values = [];
            foreach ($data['version_group_details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItem::class, 'json', $context);
            }
            $object->setVersionGroupDetails($values);
            unset($data['version_group_details']);
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
        $dataArray['move'] = $this->normalizer->normalize($data->getMove(), 'json', $context);
        $values = [];
        foreach ($data->getVersionGroupDetails() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['version_group_details'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\PokemonDetailMovesItem::class => false];
    }
}
