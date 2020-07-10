<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraints\File;

use AppBundle\Enum\GameObjectBehaviourEnum;
use AppBundle\Enum\GameObjectActionEnum;

use AppBundle\Form\GameObjectCategoryType;
use AppBundle\Form\GameObjectScoreType;
use AppBundle\Form\GameObjectTimeType;
use AppBundle\Form\GameObjectValueType;

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
            ->add('faction', EntityType::class, array(
                'class' => 'AppBundle:faction',
                'choice_label' => 'name',
            ))
            ->add('offset')
            ->add('name')
            ->add('description')
            ->add('icon', FileType::class, array(
                'label' => 'icon (PNG file)',
                'data_class' => null,
                'mapped' => false,
                'required' => false,
                 'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG document',
                    ])
                ],
            ))
            ->add('image', FileType::class, array(
                'label' => 'image (PNG file)',
                'data_class' => null,
                'mapped' => false,
                'required' => false,
                 'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG document',
                    ])
                ],
            ))
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:gameObjectCategory',
                'choice_label' => 'name',
            ))
            ->add('score', GameObjectScoreType::class)
            ->add('time', GameObjectTimeType::class)
            ->add('maintenance', GameObjectValueType::class)
            ->add('cost', GameObjectValueType::class)
            ->add('prod', GameObjectValueType::class)
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