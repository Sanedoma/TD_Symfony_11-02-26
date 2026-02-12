<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['post'];
    }

    public function load(ObjectManager $manager): void
    {
        $posts = [
            ['L\'IA en 2025', 'l-ia-en-2025', 'L\'intelligence artificielle continue de transformer notre quotidien.', CategoryFixtures::CATEGORY_TECH],
            ['Le PHP 8.4', 'le-php-8-4', 'Les nouveautés de PHP 8.4 et leur impact sur le développement web.', CategoryFixtures::CATEGORY_TECH],
            ['Découverte de Mars', 'decouverte-de-mars', 'Les dernières découvertes sur la planète Mars.', CategoryFixtures::CATEGORY_SCIENCE],
            ['La physique quantique', 'la-physique-quantique', 'Introduction à la physique quantique pour les débutants.', CategoryFixtures::CATEGORY_SCIENCE],
            ['La Ligue des Champions', 'la-ligue-des-champions', 'Résumé de la saison de la Ligue des Champions.', CategoryFixtures::CATEGORY_SPORT],
        ];

        foreach ($posts as [$title, $slug, $content, $categoryRef]) {
            $post = new Post();
            $post->setTitle($title);
            $post->setSlug($slug);
            $post->setContent($content);
            $post->setCreatedAt(new \DateTimeImmutable());
            $post->setCategory($this->getReference($categoryRef, Category::class));

            $manager->persist($post);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
