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
class TypeDetailPastDamageRelationsItemDamageRelationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('no_damage_to', $data)) {
            $values = [];
            foreach ($data['no_damage_to'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem::class, 'json', $context);
            }
            $object->setNoDamageTo($values);
            unset($data['no_damage_to']);
        }
        if (\array_key_exists('half_damage_to', $data)) {
            $values_1 = [];
            foreach ($data['half_damage_to'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem::class, 'json', $context);
            }
            $object->setHalfDamageTo($values_1);
            unset($data['half_damage_to']);
        }
        if (\array_key_exists('double_damage_to', $data)) {
            $values_2 = [];
            foreach ($data['double_damage_to'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem::class, 'json', $context);
            }
            $object->setDoubleDamageTo($values_2);
            unset($data['double_damage_to']);
        }
        if (\array_key_exists('no_damage_from', $data)) {
            $values_3 = [];
            foreach ($data['no_damage_from'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem::class, 'json', $context);
            }
            $object->setNoDamageFrom($values_3);
            unset($data['no_damage_from']);
        }
        if (\array_key_exists('half_damage_from', $data)) {
            $values_4 = [];
            foreach ($data['half_damage_from'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem::class, 'json', $context);
            }
            $object->setHalfDamageFrom($values_4);
            unset($data['half_damage_from']);
        }
        if (\array_key_exists('double_damage_from', $data)) {
            $values_5 = [];
            foreach ($data['double_damage_from'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem::class, 'json', $context);
            }
            $object->setDoubleDamageFrom($values_5);
            unset($data['double_damage_from']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getNoDamageTo() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['no_damage_to'] = $values;
        $values_1 = [];
        foreach ($data->getHalfDamageTo() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['half_damage_to'] = $values_1;
        $values_2 = [];
        foreach ($data->getDoubleDamageTo() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['double_damage_to'] = $values_2;
        $values_3 = [];
        foreach ($data->getNoDamageFrom() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['no_damage_from'] = $values_3;
        $values_4 = [];
        foreach ($data->getHalfDamageFrom() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $dataArray['half_damage_from'] = $values_4;
        $values_5 = [];
        foreach ($data->getDoubleDamageFrom() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $dataArray['double_damage_from'] = $values_5;
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class => false];
    }
}