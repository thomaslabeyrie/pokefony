<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

final class PokedexController extends AbstractController
{
    public function __construct(
        private PokeApiService $pokeApi,
        private UserRepository $userRepository,
    ) {}

    #[Route('/pokedex/{region?national}/{page?1}', name: 'app_pokedex_region')]
    public function list(string $region, int $page)
    {
        $data = $this->pokeApi->getPokemonsByRegion($region, $page);

        $favoriteIds = [];

        $user = $this->getUser();
        if ($user instanceof User) {
            // Reload user from database to get fresh favoritePokemons collection
            $freshUser = $this->userRepository->find($user->getId());
            if ($freshUser) {
                $favoriteIds = array_values($freshUser->getFavoritePokemons()->map(fn($p) => $p->getPokemonId())->toArray());
            }
        }

        return $this->render('pokemon/pokedex.html.twig', [
            'region' => $region,
            'page' => $page,
            'pokemons' => $data,
            'favoriteIds' => $favoriteIds,
        ]);
    }

    #[Route('/pokemon/{name}', name: 'app_pokemon_show')]
    public function show(string $name)
    {
        $data = $this->pokeApi->getPokemon($name);

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $data,
        ]);
    }
}
