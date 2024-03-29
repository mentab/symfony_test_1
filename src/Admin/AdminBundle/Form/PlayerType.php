<?php

namespace Admin\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PlayerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('faction', EntityType::class, array(
                'class' => 'AdminAdminBundle:Faction',
                'choice_label' => 'name',
            ))
            ->add('server', EntityType::class, array(
                'class' => 'AdminAdminBundle:Server',
                'choice_label' => 'name',
            ))
            ->add('alliance')
            ->add('name')
            ->add('description')
            ->add('iconFilename')
            ->add('imageFilename');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\Player'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'admin_adminbundle_player';
    }
}