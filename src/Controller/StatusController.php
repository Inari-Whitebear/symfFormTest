<?php

namespace App\Controller;

use App\DTO\StatusListDTO;
use App\Form\StatusListType;
use App\Repository\StatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StatusController extends AbstractController
{
    /**
     * @Route("/status", name="status")
     */
    public function index(Request $request, StatusRepository $statusRepository)
    {
        $status = $statusRepository->findAll();
        $statusListDTO = new StatusListDTO($status);

        $form = $this->createForm(StatusListType::class, $statusListDTO, []);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($form->getData());
        }

        return $this->render('status/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
