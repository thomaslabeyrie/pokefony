<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class ApiMeController extends AbstractController
{
    #[Route('/api/me', name: 'api_me')]
    public function me(#[CurrentUser] ?User $user): JsonResponse
    {
        return $this->json(['user' => $user->getUserIdentifier()]);
    }
}
