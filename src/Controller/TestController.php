<?php

namespace App\Controller;

use App\DTO\Test\TestDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

final class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function test(SerializerInterface $serializer): Response
    {
        // Simple JSON with only a few properties set
        $json = '{"name": "thomas", "age": null, "height": 176}';
        $data = json_decode($json, true);
        $data = array_filter($data, fn ($entry) => null !== $entry);
        $json = json_encode($data);

        // Deserialize with skip null values
        $person = $serializer->deserialize(
            $json,
            TestDTO::class,
            'json',
            [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                AbstractObjectNormalizer::SKIP_UNINITIALIZED_VALUES => true,
            ]
        );

        dd($person);
    }
}
