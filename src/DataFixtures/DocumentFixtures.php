<?php

namespace App\DataFixtures;

use App\Entity\Document;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class DocumentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');

        for ($i=0; $i < 10; $i++) { 
            $document = new Document();

            $createdAt = $faker->dateTimeAD;
            $dateDocument = $faker->dateTime();
            $dateDeadline = $faker->dateTime($max = '+3 days');
            $designation = $faker->sentence(4);
            $amount = $faker->randomFloat();
            $onePart = $faker->randomFloat();
            $thirdPart = $faker->randomFloat();
            $url = $faker->imageUrl(80, 45);

            $document->setCreatedAt($createdAt)
                     ->setDateDocument($dateDocument)
                     ->setDateDeadline($dateDeadline)
                     ->setDesignation($designation)
                     ->setAmount($amount)
                     ->setOnePart($onePart)
                     ->setThirdPart($thirdPart)
                     ->setUrl($url);

            $manager->persist($document);
        }


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
