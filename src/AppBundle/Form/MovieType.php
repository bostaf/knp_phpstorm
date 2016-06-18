<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text')
            ->add('samsCharacterName', 'text')
            ->add('isMainCharacter', 'checkbox', array(
                'required' => false
            ))
            ->add('rating', 'integer')
            ->add('releasedAt', 'date', array(
                'widget' => 'single_text'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movie'
        ));
    }

    public function getName()
    {
        return 'app_bundle_movie_type';
    }
}
