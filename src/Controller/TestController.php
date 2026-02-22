<?php

namespace App\Controller;

use App\Service\PokeApiService;
use App\ViewModel\EvolutionChainViewModel;
use App\ViewModel\PokemonViewModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function test(PokeApiService $pokeApi): Response
    {
        $data = $pokeApi->getFullPokemonData('eevee');

        return $this->render('test/index.html.twig', [
            'evolutionChain' => $data['evolutionChain'],
        ]);

    }
}
