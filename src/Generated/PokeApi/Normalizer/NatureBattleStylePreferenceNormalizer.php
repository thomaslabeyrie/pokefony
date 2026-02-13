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

class NatureBattleStylePreferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\NatureBattleStylePreference::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\NatureBattleStylePreference::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\NatureBattleStylePreference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('low_hp_preference', $data)) {
            $object->setLowHpPreference($data['low_hp_preference']);
            unset($data['low_hp_preference']);
        }
        if (\array_key_exists('high_hp_preference', $data)) {
            $object->setHighHpPreference($data['high_hp_preference']);
            unset($data['high_hp_preference']);
        }
        if (\array_key_exists('move_battle_style', $data)) {
            $object->setMoveBattleStyle($this->denormalizer->denormalize($data['move_battle_style'], \App\Generated\PokeApi\Model\MoveBattleStyleSummary::class, 'json', $context));
            unset($data['move_battle_style']);
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
        $dataArray['low_hp_preference'] = $data->getLowHpPreference();
        $dataArray['high_hp_preference'] = $data->getHighHpPreference();
        $dataArray['move_battle_style'] = $this->normalizer->normalize($data->getMoveBattleStyle(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\NatureBattleStylePreference::class => false];
    }
}
