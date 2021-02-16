<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\DocumentRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DocumentController extends AbstractController
{
    /**
     * @Route("/documents", name="document")
     */
    public function show(DocumentRepository $repo, Request $request, EntityManagerInterface $manager)
    {
        $documents = $repo->findAll();

        $document = new Document();

        $form = $this->createForm(DocumentType::class, $document);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $document->setCreatedAt(new DateTime());

            $manager->persist($document);
            $manager->flush();
        }

        
        return $this->render('document/show.html.twig', [
            'documents' => $documents,
            'formDocument' => $form->createView()
        ]);
    }

}
