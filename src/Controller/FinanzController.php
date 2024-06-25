<?php

namespace App\Controller;

use App\Form\FinanzFilterType;
use App\Repository\FinanzbuchhaltungRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FinanzController extends AbstractController
{
    #[Route('/finanz', name: 'app_finanz')]
    public function index(Request $request, FinanzbuchhaltungRepository $finanzbuchhaltungRepository): Response
    {
        $form = $this->createForm(FinanzFilterType::class);
        $form->handleRequest($request);

        $finanz = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $type = $form->get('vorgangsart')->getData();
            if ($type) {
                $finanz = $finanzbuchhaltungRepository->findBy(['vorgangsart' => $type]);
            } else {
                $finanz = $finanzbuchhaltungRepository->findAll();
            }
        } else {
            $finanz = $finanzbuchhaltungRepository->findAll();
        }

        return $this->render('finanz/index.html.twig', [
            'form' => $form->createView(),
            'finanz' => $finanz,
        ]);
    }
}
