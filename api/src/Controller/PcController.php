<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

#[Route(path: '/api')]
final class PcController extends AbstractController
{
    public function __construct(private readonly PokeApiService $pokeApi)
    {
    }

    #[Route(path: '/pc', name: 'api_pc')]
    public function index(#[CurrentUser] User $user): Response
    {
        $userPokemons = $user->getPokemons();

        foreach ($userPokemons as $pokemon) {
            $pokemon->apiData = $this->pokeApi->getPcPokemonListData($pokemon->getPokemonId());
        }

        return new JsonResponse(['pokemons' => $userPokemons]);
    }

    #[Route(path: '/pc/new', name: 'app_pc_new')]
    public function new(): Response
    {
        return $this->render('pc/new.html.twig');
    }
}
