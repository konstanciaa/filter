<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $contracts = 150;

        $myData = [
            'nummer' => 12345,
            'vorgangsart' => 'Transportrechnung',
            'betreff' => 'Test Rechnung',
            'kunde' => 'DB',
            'betrag' => 235,
        ];
        
        return $this->render('main/homepage.html.twig', [
            'contracts' => $contracts,
            'myData' => $myData,
        ]);
    }
}