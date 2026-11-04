<?php

namespace App\Controller;

use App\Service\ApiToViewMapper;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PokedexController extends AbstractController
{
    public function __construct(
        private readonly PokeApiService $pokeApi,
        private readonly ApiToViewMapper $viewMapper,
    ) {}

    #[Route(path: '/pokedex', name: 'api_pokedex_list')]
    public function list(): Response
    {
        $list = $this->pokeApi->getAllPokedexes();
        $viewModel = $this->viewMapper->pokedexListByRegion($list);

        return new JsonResponse($viewModel);
    }

    #[Route(path: '/pokedex/{name?national}/{page?1}', name: 'app_pokedex_region')]
    public function getOne(string $name, int $page): Response
    {
        $pokedex = $this->pokeApi->getPokedex($name, $page);

        return new JsonResponse($pokedex);
    }

    #[Route(path: '/species/{name}', name: 'api_species_show')]
    public function show(string $name): Response
    {
        $fullSpeciesEntry = $this->pokeApi->getFullSpeciesData($name);
        $viewModel = $this->viewMapper->speciesPage(
            $fullSpeciesEntry['pokemon'],
            $fullSpeciesEntry['species'],
            $fullSpeciesEntry['evolutionChain'],
        );

        return new JsonResponse($viewModel);
    }
}
