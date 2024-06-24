<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\Data;
use Psr\Log\LoggerInterface;

class MyDataApiController extends AbstractController
{
    #[Route('/api/mydata')]
    public function getCollection(LoggerInterface $logger): Response
    {
        dd($logger);

        $myData = [
            new Data(
                1,
                12345,
                'Transportrechnung',
                'Test Rechnung',
                'DB',
                235,
            ),
            new Data(
                2,
                12346,
                'Transportgutschrift',
                'Test Rechnung',
                'ASF',
                276,
            ),
            new Data(
                3,
                12347,
                'Transportgutschrift',
                'Test Rechnung',
                'EL',
                190,
            )
        ];

        return $this->json($myData);
    }
}