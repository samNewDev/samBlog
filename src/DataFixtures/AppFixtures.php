<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Article;
// use App\Repository\ArticleRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
    //     // $author = new User();
    //     // $author->setEmail('admin@gmail.com');
    //     // $author->setUsername('admin');
    //     // $author->setPassword($this->passwordEncoder->encodePassword(
    //     //     $author,
    //     //     'adminadmin'
    //     // ));

    //     $article = new Article();
    //     $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quibusdam porro vitae suscipit dicta delectus aspernatur deserunt ab, corporis cumque expedita voluptates quasi. Quisquam hic architecto magnam molestias, temporibus velit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quibusdam porro vitae suscipit dicta delectus aspernatur deserunt ab, corporis cumque expedita voluptates quasi. Quisquam hic architecto magnam molestias, temporibus velit?";
    //     $imgDir = "C:\Users\poste\Desktop\picturesForBlog\img";

    //    for ($i = 0; $i < 5; $i++) { 
    //         $user = new User();

    //         $user->setEmail('user'.$i.'@gmail.com');
    //         $user->setUsername('user'.$i);
    //         $user->setPassword($this->passwordEncoder->encodePassword(
    //             $user,
    //             'password'
    //         ));

            
    //         $manager->persist($user);
    //     }

    //     $manager->flush();

    //    for ($i = 1; $i < 10; $i++) { 
    //         $article = new Article();

    //         $article->setTitle('title'.$i);
    //         $article->setContent($text);
    //         $article->setImage($imgDir.$i);
    //         // $article->setUser($author);
            
    //         $manager->persist($article);
    //     }
        
    //     $manager->flush();

    }
}
