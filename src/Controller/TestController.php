<?php

namespace App\Controller;

use App\DTO\Pokemon\PokemonApiDTO;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function test(SerializerInterface $serializer, PokeApiService $pokeApi): Response
    {
        $pokemon = $pokeApi->getApiPokemon('bulbasaur');

        dd($pokemon);
    }
}
