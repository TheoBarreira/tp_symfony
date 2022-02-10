<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 3; $i++) {
            $projet = new Projet();
            $projet->setTitle($faker->text(30));
            $projet->setDescription($faker->text(255));
            $projet->setImgProject('projet.jpg');
            $manager->persist($projet);
        }

        $manager->flush();
    }
}
