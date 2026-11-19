<?php

namespace App\Controller;

use App\Service\ApiToViewMapper;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
final class PokemonController extends AbstractController
{
    public function __construct(
        private readonly PokeApiService $pokeApi,
        private readonly ApiToViewMapper $viewMapper,
    ) {}

    #[Route(path: '/pokemon/{name}', name: 'api_pokemon_show')]
    public function show(string $name): Response
    {
        $pokemon = $this->pokeApi->getPokemon($name);

        return new JsonResponse($pokemon);
    }
}
