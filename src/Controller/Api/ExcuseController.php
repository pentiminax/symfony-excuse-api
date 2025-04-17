<?php

namespace App\Controller\Api;

use App\Repository\ExcuseRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
class ExcuseController
{
    #[Route('/api/excuses', name: 'api.excuses', methods: ['GET'])]
    public function __invoke(ExcuseRepository $excuseRepository): JsonResponse
    {
        return new JsonResponse([
            'excuse' => $excuseRepository->getRandomExcuse(),
        ]);
    }
}