<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setNom('Dupont');
        $client->setEmail('dupont@dev.com');
        $manager->persist($client);

        $client2 = new Client();
        $client2->setNom('Leclerc');
        $client2->setEmail('leclerc@gmail.com');
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setNom('Test plaine image');
        $client3->setEmail('test_plaine_image@outlook.fr');
        $manager->persist($client3);

        $manager->flush();
    }
}
