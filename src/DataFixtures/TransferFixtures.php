<?php

namespace App\DataFixtures;

use App\Entity\Transfer;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TransferFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');

        for ($i = 0; $i < 10; $i++) {
            $transfer = new Transfer();

            $createdAt = $faker->dateTimeAD;
            $dateTransfer = $faker->dateTime();
            $designation = $faker->sentence(4);
            $balanceBefore = $faker->randomFloat();
            $debit = $faker->randomFloat();
            $credit = $faker->randomFloat();
            $balanceAfter = $faker->randomFloat();

            $transfer->setCreatedAt($createdAt)
                     ->setDateTransfer($dateTransfer)
                     ->setDesignation($designation)
                     ->setBalanceBefore($balanceBefore)
                     ->setDebit($debit)
                     ->setCredit($credit)
                     ->setBalanceAfter($balanceAfter);

            $manager->persist($transfer);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
