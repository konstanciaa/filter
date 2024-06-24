<?php

namespace App\Controller;

use App\Repository\FinanzbuchhaltungRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FinanzController extends AbstractController
{
    #[Route('/finanz', name: 'app_finanz')]
    public function index(FinanzbuchhaltungRepository $finanzbuchhaltungRepository): Response
    {
        $finanz = $finanzbuchhaltungRepository->findAll();
        dd($finanz);
        return $this->render('finanz/index.html.twig');
    }
}
