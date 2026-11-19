<?php

namespace App\Controller;

use App\Service\ApiToViewMapper;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
final class SpeciesController extends AbstractController
{
    public function __construct(
        private readonly PokeApiService $pokeApi,
        private readonly ApiToViewMapper $viewMapper,
    ) {}

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
