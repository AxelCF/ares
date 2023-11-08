<?php

namespace App\DataFixtures;

use App\Entity\Subjects;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // Professeur
        $users = new Users();
        $users->setName("Hamza")
            ->setEmail("hamza@gmail.com");
        $manager->persist($users);

        $users = new Users();
        $users->setName("Jean")
            ->setEmail("jean@gmail.com");
        $manager->persist($users);

        $users = new Users();
        $users->setName("Will")
            ->setEmail("will@gmail.com");
        $manager->persist($users);

        $users = new Users();
        $users->setName("Nicolas")
            ->setEmail("nicolas@gmail.com");
        $manager->persist($users);

        $users = new Users();
        $users->setName("David")
            ->setEmail("david@gmail.com");
        $manager->persist($users);

        $users = new Users();
        $users->setName("Baptiste")
            ->setEmail("baptiste@gmail.com");
        $manager->persist($users);

        // Matières
        $matieres = new Subjects();
        $matieres->setName("Français");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Histoire");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Anglais");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Sport");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Mathématiques");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("SVT");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Physique-chimie");
        $manager->persist($matieres);

        $matieres = new Subjects();
        $matieres->setName("Informatique");
        $manager->persist($matieres);

        $manager->flush();
    }
}
