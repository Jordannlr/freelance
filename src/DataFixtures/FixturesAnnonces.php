<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Annonce;
use App\Entity\Categorie;

class FixturesAnnonces extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create ('fr_FR');

        for ( $i = 1; $i <= 40; $i++) {
            $announce = new Annonce ();

            $announce->setNom($faker->lastName())
                     ->setPrenom ($faker->Name())
                     ->setAge (25)
                     ->setEmail ($faker->email())
                     ->setRegion ($faker->country())
                     ->setPretentions ($faker->numberBetween($min = 1000, $max = 9000))
                     ->setInformation ($faker->sentence($nbWords = 6, $variableNbWords = true))
                     ->setPhoneNumber($faker->phoneNumber);

            $manager->persist($announce);
        }

        $manager->flush();
    }
}
