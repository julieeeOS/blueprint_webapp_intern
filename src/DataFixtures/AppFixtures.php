<?php

namespace App\DataFixtures;

use App\Entity\Blueprint;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * Faker.
     */
    protected Generator $faker;

    /**
     * Persistence object manager.
     */
    protected ObjectManager $manager;

    /**
     * Load.
     *
     * @param ObjectManager $manager Persistence object manager
     */
    public function load(ObjectManager $manager): void
    {
        $this->faker = Factory::create();
        // create 10 fixtures with random file sizes
        for ($i = 0; $i < 10; $i++) {
            $blueprint = new Blueprint();
            $blueprint->setName('blueprint '.$i);
            $blueprint->setVersion('1.0.'.(10-$i));
            $blueprint->setManifest($this->faker->sentence);
            $blueprint->setFilesize(mt_rand(100, 400));
            $blueprint->setReleaseDate($this->faker->dateTimeBetween('-100 days','-1 days'));
            $blueprint->setComment($this->faker->sentence);
            $blueprint->setDownload('localhost/testlink');
            $manager->persist($blueprint);
        }

        $manager->flush();
    }
}