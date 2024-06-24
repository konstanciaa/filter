<?php

namespace App\Controller;

use App\Repository\DataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(DataRepository $dataRepository): Response
    {
        $contracts = $dataRepository->findAll();

        $myData = $contracts[array_rand($contracts)];

        return $this->render('main/homepage.html.twig', [
            'myData' => $myData,
            'contracts' => $contracts,
        ]);
    }
}