<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use AppBundle\Enum\GameObjectBehaviourEnum;
use AppBundle\Enum\GameObjectActionEnum;

class GameObjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actions', ChoiceType::class, array(
                    'required' => true,
                    'multiple' => true,
                    'choices' => GameObjectActionEnum::getAvailableActions(),
                    'choices_as_values' => true,
                    'choice_label' => function($action) {
                        return GameObjectActionEnum::getActionName($action);
                    }
                ))
            ->add('behaviours', ChoiceType::class, array(
                    'required' => true,
                    'multiple' => true,
                    'choices' => GameObjectBehaviourEnum::getAvailableBehaviours(),
                    'choices_as_values' => true,
                    'choice_label' => function($behaviour) {
                        return GameObjectBehaviourEnum::getBehaviourName($behaviour);
                    }
                ))
            ->add('levelMax')
            ->add('faction')
            ->add('offset')
            ->add('name')
            ->add('description')
            ->add('icon')
            ->add('image')
            ->add('score')
            ->add('time')
            ->add('maintenance')
            ->add('cost')
            ->add('prod')
            ->add('category')
            ->add('requirements');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\GameObject'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_gameobject';
    }
}