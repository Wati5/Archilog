<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;


class StarshipController extends AbstractController
{
    #[Route('/starships/{id<\d+>}', name:'app_starship_show')]
    public function show(int $id): Response
    {
        dd($id);
    }
}