<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\DataRepository;


class MyDataApiController extends AbstractController
{
    #[Route('/api/mydata')]
    public function getCollection(DataRepository $repository): Response
    {

        $myData = $repository->findAll();

        return $this->json($myData);
    }
}