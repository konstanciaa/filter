<?php

namespace App\DataFixtures;

use App\Entity\Finanzbuchhaltung;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $finanz1 = new Finanzbuchhaltung();
        $finanz1->setNummer(12345);
        $finanz1->setVorgangsart('Transportrechnung');
        $finanz1->setBetreff('Dossier 21-3-0005');
        $finanz1->setKunde('MM');
        $finanz1->setBetrag(35);
        $manager->persist($finanz1);

        $finanz2 = new Finanzbuchhaltung();
        $finanz2->setNummer(12346);
        $finanz2->setVorgangsart('Transportrechnung');
        $finanz2->setBetreff('Dossier 21-3-0011');
        $finanz2->setKunde('DB Transports GmbH');
        $finanz2->setBetrag(999);
        $manager->persist($finanz2);

        $finanz3 = new Finanzbuchhaltung();
        $finanz3->setNummer(12347);
        $finanz3->setVorgangsart('Transportgutschrift');
        $finanz3->setBetreff('Dossier Test');
        $finanz3->setKunde('Seller GmbH');
        $finanz3->setBetrag(235);
        $manager->persist($finanz3);

        $finanz4 = new Finanzbuchhaltung();
        $finanz4->setNummer(12348);
        $finanz4->setVorgangsart('Transportgutschrift');
        $finanz4->setBetreff('Dossier Test');
        $finanz4->setKunde('Ferb GmbH');
        $finanz4->setBetrag(25);
        $manager->persist($finanz4);

        $manager->flush();
    }
}
