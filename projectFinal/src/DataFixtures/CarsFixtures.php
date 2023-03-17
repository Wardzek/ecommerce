<?php

namespace App\DataFixtures;

use App\Entity\Cars;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Monolog\DateTimeImmutable;

class CarsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++) {
            $brand = $this->getReference('brand-'. $faker->numberBetween(1, 4));
            $cars = new Cars();
            $cars->setTitle($faker->sentence);
            $cars->setSlug($faker->slug);
            $cars->setContent($faker->text);
            $cars->setOnline(true);
            $cars->setCreatedAt(new DateTimeImmutable('now'));
            $cars->setUpdatedAt(new DateTimeImmutable('now'));
            $cars->setSubtitle($faker->text(155));
            $cars->setAttachment($faker->ImageUrl(640, 480, 'cars', true));
            $cars->setPrice($faker->randomFloat(2));
            $cars->setCategory($brand);
            $manager->persist($cars);
        }

        $manager->flush();
    }
}