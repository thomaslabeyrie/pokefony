<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\PokemonManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class FavoritesController extends AbstractController
{
    public function __construct(
        private PokemonManager $pokemonManager,
        private EntityManagerInterface $entityManager,
    ) {}

    #[Route('/favorites', name: 'app_favorites')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        // Get user
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        // Get his favorites
        $pokemons = $user->getFavoritePokemons();
        // dd($pokemons->getValues());

        return $this->render('favorites/index.html.twig', [
            'pokemons' => $pokemons,
        ]);
    }

    #[Route('/favorites/toggle/{pokemonId}', name: 'app_favorites_toggle', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function toggle(int $pokemonId): Response
    {
        // Get user from database
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        // Récupère ou crée une entité Pokemon
        $pokemon = $this->pokemonManager->getOrCreatePokemon($pokemonId);

        // Toggle favorite
        if ($user->getFavoritePokemons()->contains($pokemon)) {
            $user->removeFavoritePokemon($pokemon);
            $isFavorite = false;
        } else {
            $user->addFavoritePokemon($pokemon);
            $isFavorite = true;
        }

        $this->entityManager->flush();

        // Return Turbo Frame response to update only the button
        return $this->render('favorites/_favorite_button.html.twig', [
            'pokemon' => ['id' => $pokemonId],
            'isFavorite' => $isFavorite,
        ]);
    }
}
