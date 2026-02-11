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
class BerryDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\BerryDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\BerryDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\BerryDetail();
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
        if (\array_key_exists('growth_time', $data)) {
            $object->setGrowthTime($data['growth_time']);
            unset($data['growth_time']);
        }
        if (\array_key_exists('max_harvest', $data)) {
            $object->setMaxHarvest($data['max_harvest']);
            unset($data['max_harvest']);
        }
        if (\array_key_exists('natural_gift_power', $data)) {
            $object->setNaturalGiftPower($data['natural_gift_power']);
            unset($data['natural_gift_power']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('smoothness', $data)) {
            $object->setSmoothness($data['smoothness']);
            unset($data['smoothness']);
        }
        if (\array_key_exists('soil_dryness', $data)) {
            $object->setSoilDryness($data['soil_dryness']);
            unset($data['soil_dryness']);
        }
        if (\array_key_exists('firmness', $data)) {
            $object->setFirmness($this->denormalizer->denormalize($data['firmness'], \App\Generated\PokeApi\Model\BerryFirmnessSummary::class, 'json', $context));
            unset($data['firmness']);
        }
        if (\array_key_exists('flavors', $data)) {
            $values = [];
            foreach ($data['flavors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\BerryDetailFlavorsItem::class, 'json', $context);
            }
            $object->setFlavors($values);
            unset($data['flavors']);
        }
        if (\array_key_exists('item', $data)) {
            $object->setItem($this->denormalizer->denormalize($data['item'], \App\Generated\PokeApi\Model\ItemSummary::class, 'json', $context));
            unset($data['item']);
        }
        if (\array_key_exists('natural_gift_type', $data)) {
            $object->setNaturalGiftType($this->denormalizer->denormalize($data['natural_gift_type'], \App\Generated\PokeApi\Model\TypeSummary::class, 'json', $context));
            unset($data['natural_gift_type']);
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
        $dataArray['name'] = $data->getName();
        $dataArray['growth_time'] = $data->getGrowthTime();
        $dataArray['max_harvest'] = $data->getMaxHarvest();
        $dataArray['natural_gift_power'] = $data->getNaturalGiftPower();
        $dataArray['size'] = $data->getSize();
        $dataArray['smoothness'] = $data->getSmoothness();
        $dataArray['soil_dryness'] = $data->getSoilDryness();
        $dataArray['firmness'] = $this->normalizer->normalize($data->getFirmness(), 'json', $context);
        $dataArray['item'] = $this->normalizer->normalize($data->getItem(), 'json', $context);
        $dataArray['natural_gift_type'] = $this->normalizer->normalize($data->getNaturalGiftType(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\BerryDetail::class => false];
    }
}