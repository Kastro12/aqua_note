<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/28/2017
 * Time: 1:20 AM
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Genus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        Fixtures::load(__DIR__.'/fixtures.yml', $manager,
            [
                'providers' => [$this]
            ]
            );
    }

    public function genus()
    {
        $genera = [
            'Octopus',
            'Balaena',
            'Orcinus',
            'Hippocampus',
            'Asterias',
            'Aurelia',
            'Carcharodon',
            'Cucumaria',
            'Chelonia',
            'Paralithodes',
            'Eumatopias'
        ];

        $key = array_rand($genera);

        return $genera[$key];
    }

    public function subfamily()
    {
        $subfamilies = [
            'Pera zdera',
            'Miki maus',
            'Patrik zvezda',
            'Vitez koja',
            'Fred kremenko',
            'Barni kameniko',
            'Iznogud',
            'Splinter',
            'Tom i dzeri',
            'Paja patak',
            'Popaj',
            'Herkules'
        ];

        $key = array_rand($subfamilies);

        return $subfamilies[$key];

    }

}