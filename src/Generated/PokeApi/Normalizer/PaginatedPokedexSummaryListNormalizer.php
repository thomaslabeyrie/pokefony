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

class PaginatedPokedexSummaryListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('next', $data) && null !== $data['next']) {
            $object->setNext($data['next']);
            unset($data['next']);
        } elseif (\array_key_exists('next', $data) && null === $data['next']) {
            $object->setNext(null);
        }
        if (\array_key_exists('previous', $data) && null !== $data['previous']) {
            $object->setPrevious($data['previous']);
            unset($data['previous']);
        } elseif (\array_key_exists('previous', $data) && null === $data['previous']) {
            $object->setPrevious(null);
        }
        if (\array_key_exists('results', $data)) {
            $values = [];
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokedexSummary::class, 'json', $context);
            }
            $object->setResults($values);
            unset($data['results']);
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
        if ($data->isInitialized('count') && null !== $data->getCount()) {
            $dataArray['count'] = $data->getCount();
        }
        if ($data->isInitialized('next')) {
            $dataArray['next'] = $data->getNext();
        }
        if ($data->isInitialized('previous')) {
            $dataArray['previous'] = $data->getPrevious();
        }
        if ($data->isInitialized('results') && null !== $data->getResults()) {
            $values = [];
            foreach ($data->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['results'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class => false];
    }
}
