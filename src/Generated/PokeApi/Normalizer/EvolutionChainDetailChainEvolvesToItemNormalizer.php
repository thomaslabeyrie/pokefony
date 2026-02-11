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
class EvolutionChainDetailChainEvolvesToItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem();
        if (\array_key_exists('is_baby', $data) && \is_int($data['is_baby'])) {
            $data['is_baby'] = (bool) $data['is_baby'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('evolution_details', $data)) {
            $values = [];
            foreach ($data['evolution_details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class, 'json', $context);
            }
            $object->setEvolutionDetails($values);
            unset($data['evolution_details']);
        }
        if (\array_key_exists('is_baby', $data)) {
            $object->setIsBaby($data['is_baby']);
            unset($data['is_baby']);
        }
        if (\array_key_exists('species', $data)) {
            $object->setSpecies($this->denormalizer->denormalize($data['species'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemSpecies::class, 'json', $context));
            unset($data['species']);
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
        foreach ($data->getEvolutionDetails() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['evolution_details'] = $values;
        $dataArray['is_baby'] = $data->getIsBaby();
        $dataArray['species'] = $this->normalizer->normalize($data->getSpecies(), 'json', $context);
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class => false];
    }
}