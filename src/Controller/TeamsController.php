<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TeamRepository;
use App\Service\TeamManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class TeamsController extends AbstractController
{
    public function __construct(
        private TeamManager $teamManager,
        private TeamRepository $teamRepository,
        private EntityManagerInterface $entityManager,
    ) {}

    /**
     * Display all user's teams
     */
    #[Route('/teams', name: 'app_teams')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $teams = $this->teamRepository->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );

        return $this->render('teams/index.html.twig', [
            'teams' => $teams,
        ]);
    }

    /**
     * Show individual team details
     */
    #[Route('/teams/{id}', name: 'app_teams_show', requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function show(int $id): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $team = $this->teamRepository->findOneBy(['id' => $id, 'user' => $user]);

        if (!$team) {
            throw $this->createNotFoundException('Team not found');
        }

        // dd($team->getPokemons()->getValues());

        return $this->render('teams/show.html.twig', [
            'team' => $team,
        ]);
    }

    /**
     * Return modal content for adding Pokemon to team
     * This endpoint is called via Turbo Frame
     */
    #[Route('/teams/modal/{pokemonId}', name: 'app_teams_modal')]
    #[IsGranted('ROLE_USER')]
    public function modal(int $pokemonId, Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $availableTeams = $this->teamManager->getAvailableTeamsForPokemon($user, $pokemonId);
        $teamsWithPokemon = $this->teamRepository->findTeamsContainingPokemon($user, $pokemonId);
        $pokemonName = $request->query->get('name', '');

        return $this->render('teams/_add_pokemon_modal.html.twig', [
            'pokemonId' => $pokemonId,
            'pokemonName' => $pokemonName,
            'teams' => $availableTeams,
            'teamsWithPokemon' => $teamsWithPokemon,
        ]);
    }

    /**
     * Create new team with Pokemon
     */
    #[Route('/teams/create', name: 'app_teams_create', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $teamName = $request->request->get('team_name');
        $pokemonId = (int) $request->request->get('pokemon_id');

        if (!$teamName || !$pokemonId) {
            return $this->json(['error' => 'Missing parameters'], 400);
        }

        try {
            $team = $this->teamManager->createTeam($user, $teamName, $pokemonId);

            // Return updated button showing all teams containing this Pokemon
            $teams = $this->teamRepository->findTeamsContainingPokemon($user, $pokemonId);

            return $this->render('teams/_team_button.html.twig', [
                'pokemonId' => $pokemonId,
                'teams' => $teams,
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Add Pokemon to existing team
     */
    #[Route('/teams/{teamId}/add/{pokemonId}', name: 'app_teams_add_pokemon', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function addPokemon(int $teamId, int $pokemonId): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $team = $this->teamRepository->findOneBy(['id' => $teamId, 'user' => $user]);

        if (!$team) {
            return $this->json(['error' => 'Team not found'], 404);
        }

        try {
            $this->teamManager->addPokemonToTeam($team, $pokemonId);

            // Return updated button showing all teams containing this Pokemon
            $teams = $this->teamRepository->findTeamsContainingPokemon($user, $pokemonId);

            return $this->render('teams/_team_button.html.twig', [
                'pokemonId' => $pokemonId,
                'teams' => $teams,
            ]);
        } catch (\RuntimeException $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove Pokemon from team
     */
    #[Route('/teams/{teamId}/remove/{pokemonId}', name: 'app_teams_remove_pokemon', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function removePokemon(int $teamId, int $pokemonId, Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $team = $this->teamRepository->findOneBy(['id' => $teamId, 'user' => $user]);

        if (!$team) {
            return $this->json(['error' => 'Team not found'], 404);
        }

        try {
            $this->teamManager->removePokemonFromTeam($team, $pokemonId);

            // If called from modal (via fetch), return updated button HTML
            // Check if it's an AJAX request (XMLHttpRequest or Fetch API)
            if (
                $request->headers->get('X-Requested-With') === 'XMLHttpRequest' ||
                $request->getContentTypeFormat() === 'json' ||
                !$request->isMethod('GET')
            ) {

                // Return updated button showing remaining teams containing this Pokemon
                $teams = $this->teamRepository->findTeamsContainingPokemon($user, $pokemonId);
                $pokemonName = $request->query->get('name', '');

                return $this->render('teams/_team_button.html.twig', [
                    'pokemonId' => $pokemonId,
                    'pokemonName' => $pokemonName,
                    'teams' => $teams,
                ]);
            }

            // Redirect back to team show page (for traditional form submissions)
            return $this->redirectToRoute('app_teams_show', ['id' => $teamId]);
        } catch (\Exception $e) {
            // For AJAX requests, return JSON error
            if (
                $request->headers->get('X-Requested-With') === 'XMLHttpRequest' ||
                $request->getContentTypeFormat() === 'json'
            ) {
                return $this->json(['error' => $e->getMessage()], 400);
            }

            // For traditional requests, use flash message and redirect
            $this->addFlash('error', $e->getMessage());
            return $this->redirectToRoute('app_teams_show', ['id' => $teamId]);
        }
    }

    /**
     * Rename a team (AJAX endpoint for inline editing)
     */
    #[Route('/teams/{id}/rename', name: 'app_teams_rename', requirements: ['id' => '\d+'], methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function rename(int $id, Request $request): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $team = $this->teamRepository->findOneBy(['id' => $id, 'user' => $user]);

        if (!$team) {
            return $this->json(['error' => 'Team not found'], 404);
        }

        $newName = trim($request->request->get('name', ''));

        if (empty($newName)) {
            return $this->json(['error' => 'Team name cannot be empty'], 400);
        }

        if (strlen($newName) > 100) {
            return $this->json(['error' => 'Team name cannot exceed 100 characters'], 400);
        }

        try {
            $this->teamManager->renameTeam($team, $newName);

            // Return the updated team name partial for Turbo Frame replacement
            return $this->render('teams/_team_name.html.twig', [
                'team' => $team,
                'context' => $request->request->get('context', 'index'),
            ]);
        } catch (\Exception $e) {
            // Handle uniqueness constraint violation
            if (str_contains($e->getMessage(), 'already have a team')) {
                return $this->json(['error' => 'You already have a team with this name'], 400);
            }
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Delete entire team
     */
    #[Route('/teams/{id}/delete', name: 'app_teams_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $team = $this->teamRepository->findOneBy(['id' => $id, 'user' => $user]);

        if (!$team) {
            throw $this->createNotFoundException('Team not found');
        }

        $this->entityManager->remove($team);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_teams');
    }
}
