<?php

namespace App\Controller;

use DateTime;
use App\Entity\Booking;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingController extends AbstractController
{
    /**
     * @Route("/reservation", name="booking")
     */
    public function show(BookingRepository $repo, Request $request, EntityManagerInterface $manager)
    {
        $bookings = $repo->findAll();

        $booking = new Booking();

        $form = $this->createForm(BookingType::class, $booking);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $booking->setCreatedAt(new DateTime());

            $manager->persist($booking);
            $manager->flush();
        }


        return $this->render('booking/show.html.twig', [
            'bookings' => $bookings,
            'formBooking' => $form->createView()
        ]);
    }
}
