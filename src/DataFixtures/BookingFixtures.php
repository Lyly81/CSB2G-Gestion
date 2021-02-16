<?php

namespace App\DataFixtures;

use App\Entity\Booking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class BookingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');

        for ($i=0; $i < 10; $i++) { 
            $booking = new Booking();

            $createdAt = $faker->dateTimeAD;
            $startDate = $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now');
            $endDate = $faker->dateTimeBetween($startDate, $endDate);
            $comment = $faker->sentence();

            $booking->setCreatedAt($createdAt)
                    ->setStartDate($startDate)
                    ->setEndDate($endDate)
                    ->setComment($comment);
            
            $manager->persist($booking);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
