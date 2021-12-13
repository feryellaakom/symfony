<?php

namespace App\DataFixtures;

 use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreFixtures  extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i <5 ; $i++) { 
        
         $livre=new Livre() ;
         $livre->setNomauteur("nom auteur $i ")
              ->setNomlivre("livre $i")
              ->setTypelivre("type de livre $i");  



         $manager->persist($livre);
        }
        $manager->flush();
    }
    
}

