<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/api/data')]
    public function getData()
    {
        $data = ['message' => 'Hello from Symfony!'];
        return new JsonResponse($data);
    }
}
