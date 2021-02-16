<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setPseudo("Lyly")
              ->setHash("chalet")
              ->setEmail("lyly.developpement@gmail.com")
              ->setFirstName("Lydia")
              ->setLastName("GRAYSSAGUEL");
        $manager->persist($user1);

        $user2 = new User();
        $user2->setPseudo("Lalie")
              ->setHash("chalet")
              ->setEmail("grayssaguel.aurelie@gmail.com")
              ->setFirstName("Aurélie")
              ->setLastName("GRAYSSAGUEL");
        $manager->persist($user2);

        $user3 = new User();
        $user3->setPseudo("Karine")
              ->setHash("chalet")
              ->setEmail("grayssaguel.barreau@gmail.com")
              ->setFirstName("Karine")
              ->setLastName("BARREAU");
        $manager->persist($user3);

        $user4 = new User();
        $user4->setPseudo("Joëlle")
              ->setHash("chalet")
              ->setEmail("joelle.segur@free.fr")
              ->setFirstName("Joëlle")
              ->setLastName("SEGUR");
        $manager->persist($user4);

        $user5 = new User();
        $user5->setPseudo("Ginette")
              ->setHash("chalet")
              ->setEmail("docmecricri@hotmail.fr")
              ->setFirstName("Ginette")
              ->setLastName("CESSAL");
        $manager->persist($user5);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
