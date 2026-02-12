<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture implements FixtureGroupInterface
{
    public const CATEGORY_TECH = 'category-tech';
    public const CATEGORY_SCIENCE = 'category-science';
    public const CATEGORY_SPORT = 'category-sport';

    public static function getGroups(): array
    {
        return ['category'];
    }

    public function load(ObjectManager $manager): void
    {
        $categories = [
            [self::CATEGORY_TECH, 'Technologie', 'Articles sur la technologie et le numérique.'],
            [self::CATEGORY_SCIENCE, 'Science', 'Articles sur les découvertes scientifiques.'],
            [self::CATEGORY_SPORT, 'Sport', 'Articles sur le sport et les compétitions.'],
        ];

        foreach ($categories as [$reference, $name, $content]) {
            $category = new Category();
            $category->setName($name);
            $category->setContent($content);
            $category->setCreatedAt(new \DateTimeImmutable());

            $manager->persist($category);
            $this->addReference($reference, $category);
        }

        $manager->flush();
    }
}
