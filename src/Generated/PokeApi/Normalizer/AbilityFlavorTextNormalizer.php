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
class AbilityFlavorTextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\AbilityFlavorText::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\AbilityFlavorText::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\AbilityFlavorText();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('flavor_text', $data)) {
            $object->setFlavorText($data['flavor_text']);
            unset($data['flavor_text']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], \App\Generated\PokeApi\Model\LanguageSummary::class, 'json', $context));
            unset($data['language']);
        }
        if (\array_key_exists('version_group', $data)) {
            $object->setVersionGroup($this->denormalizer->denormalize($data['version_group'], \App\Generated\PokeApi\Model\VersionGroupSummary::class, 'json', $context));
            unset($data['version_group']);
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
        $dataArray['flavor_text'] = $data->getFlavorText();
        $dataArray['language'] = $this->normalizer->normalize($data->getLanguage(), 'json', $context);
        $dataArray['version_group'] = $this->normalizer->normalize($data->getVersionGroup(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\AbilityFlavorText::class => false];
    }
}