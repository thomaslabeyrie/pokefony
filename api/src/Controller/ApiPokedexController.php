<?php

namespace App\Controller;

use App\Service\ApiToViewMapper;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class ApiPokedexController extends AbstractController
{
    public function __construct(
        private readonly PokeApiService      $pokeApi,
        private readonly ApiToViewMapper     $viewMapper,
        private readonly SerializerInterface $serializer
    )
    {
    }

    #[Route(path: '/api/pokedex/{region?national}/{page?1}', name: 'api_pokedex_region')]
    public function list(string $region, int $page): JsonResponse
    {
        $pokemons = $this->pokeApi->getPokemonsByRegion($region, $page);
        $viewModel = $this->viewMapper->listPage($pokemons);

        $json = $this->serializer->serialize($viewModel, 'json');
        return new JsonResponse($json, json: true);
    }

    
}
