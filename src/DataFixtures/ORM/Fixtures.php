<?php

namespace App\DataFixtures\ORM;

use App\Entity\Author;
use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $author = new Author();
        $author
            ->setName('Taghouti Tarek')
            ->setTitle('Developer')
            ->setUsername('taghouti')
            ->setCompany('ESPRIT')
            ->setShortBio('Lorem Ipsum is simply placeholder text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard placeholder text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of sheets containing Lorem Ipsum passages.')
            ->setPhone('0021621572886')
            ->setFacebook('tarektagh')
            ->setTwitter('taghouti')
            ->setGithub('taghouti');

        $manager->persist($author);

        $blogPost = new BlogPost();
        $blogPost
            ->setTitle('Tarek First Blog')
            ->setSlug('first-post')
            ->setDescription('Lorem Ipsum is simply placeholder text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard placeholder text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of  sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')
            ->setBody('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard , a Latin professor at Sydney College in Virginia, looked up one of the more obscure Latin words, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de  et" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H..')
            ->setAuthor($author);
        $manager->persist($blogPost);
        $manager->flush();
    }
}