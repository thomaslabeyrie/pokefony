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
class EvolutionChainDetailChainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\EvolutionChainDetailChain::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\EvolutionChainDetailChain::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\EvolutionChainDetailChain();
        if (\array_key_exists('is_baby', $data) && \is_int($data['is_baby'])) {
            $data['is_baby'] = (bool) $data['is_baby'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('evolution_details', $data)) {
            $values = [];
            foreach ($data['evolution_details'] as $value) {
                $values[] = $value;
            }
            $object->setEvolutionDetails($values);
            unset($data['evolution_details']);
        }
        if (\array_key_exists('evolves_to', $data)) {
            $values_1 = [];
            foreach ($data['evolves_to'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class, 'json', $context);
            }
            $object->setEvolvesTo($values_1);
            unset($data['evolves_to']);
        }
        if (\array_key_exists('is_baby', $data)) {
            $object->setIsBaby($data['is_baby']);
            unset($data['is_baby']);
        }
        if (\array_key_exists('species', $data)) {
            $object->setSpecies($this->denormalizer->denormalize($data['species'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainSpecies::class, 'json', $context));
            unset($data['species']);
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
        $values = [];
        foreach ($data->getEvolutionDetails() as $value) {
            $values[] = $value;
        }
        $dataArray['evolution_details'] = $values;
        $values_1 = [];
        foreach ($data->getEvolvesTo() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['evolves_to'] = $values_1;
        $dataArray['is_baby'] = $data->getIsBaby();
        $dataArray['species'] = $this->normalizer->normalize($data->getSpecies(), 'json', $context);
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\EvolutionChainDetailChain::class => false];
    }
}