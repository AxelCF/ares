<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $users = new Users();
        $users->setName("Hamza")
            ->setEmail("hamza@gmail.com");

        $manager->persist($users);
        $manager->flush();
    }
}
