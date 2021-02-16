<?php

namespace App\Controller;

use DateTime;
use App\Entity\Transfer;
use App\Form\TransferType;
use App\Repository\TransferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TransferController extends AbstractController
{
    /**
     * @Route("/etat-compte", name="transfer")
     */
    public function show(TransferRepository $repo, Request $request, EntityManagerInterface $manager)
    {
        $transfers = $repo->findAll();

        $transfer = new Transfer();

        $form = $this->createForm(TransferType::class, $transfer);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $transfer->setCreatedAt(new DateTime());

            $manager->persist($transfer);
            $manager->flush();
        }

        return $this->render('transfer/show.html.twig', [
            'transfers' => $transfers,
            'formTransfer' => $form->createView()
        ]);
    }
}
