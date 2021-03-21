<?php

namespace App\Form;

use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', null, [
                'label' => false,
                'required' => true,
                ])
            // ->add('actif')
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'username',
            //     'label' => false,
            // ])
            // ->add('article', EntityType::class, [
            //     'class' => Article::class,
            //     'choice_label' => 'title',
            //     'label' => false,
            // ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}

