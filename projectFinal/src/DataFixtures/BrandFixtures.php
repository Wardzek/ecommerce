<?php
namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $c = [
            1 => [
                'name' => 'Audi',
                'slug' => 'audi'
            ],
            2 => [
                'name' => 'Mercedes',
                'slug' => 'mercedes'
            ],
            3 => [
                'name' => 'Bmw',
                'slug' => 'bmw'
            ],
            4 => [
                'name' => 'Lamborghini',
                'slug' => 'lamborghini'
            ],
            5 => [
                'name' => 'Ferrari',
                'slug' => 'ferrari'
            ]
        ];

        foreach ($c as $k => $value){
            $brand = new Brand();
            $brand->setName($value['name']);
            $brand->setSlug($value['slug']);
            $manager->persist($brand);
            $this->addReference('brand-' . $k, $brand);
        }

        $manager->flush();
    }
}