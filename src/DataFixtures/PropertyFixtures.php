<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i<10; $i++){
            $property= new Property();
            $property->setTitle("bien N° $i")
            ->setRooms(rand(3,15))
            ->setBedrooms($property->getRooms()-rand(2,4))
            ->setDescription("<p>contenue de l'annonce N° $i")
            ->setSurface($property->getRooms()*rand(10,40))
            ->setPrice(rand(1000,1500)*$property->getSurface())
            ->setFloor(rand(0,10))
            ->setHeat(rand(1,2))
            ->setCity("paris")
            ->setAddress("adress N° $i")
            ->setPostalCode(75000+rand(1,15));
            $manager->persist($property);
        }

        $manager->flush();
    }
}
