<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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
            ->add('icon', FileType::class)
            ->add('image', FileType::class)
            ->add('category', GameObjectCategoryType::class)
            ->add('score', GameObjectScoreType::class)
            ->add('time', GameObjectTimeType::class)
            ->add('maintenance', GameObjectValueType::class)
            ->add('cost', GameObjectValueType::class)
            ->add('prod', GameObjectValueType::class)

            /*->add('score', EntityType::class, array(
                'class' => 'AppBundle:gameObjectScore',
                'choice_label' => 'name',
            ))
            ->add('scoreNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'score',
            ))
            ->add('time', EntityType::class, array(
                'class' => 'AppBundle:gameObjectTime',
                'choice_label' => 'name',
            ))
            ->add('timeNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'time',
            ))
            ->add('maintenance', EntityType::class, array(
                'class' => 'AppBundle:gameObjectValue',
                'choice_label' => 'name',
            ))
            ->add('maintenanceNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'maintenance',
            ))
            ->add('cost', EntityType::class, array(
                'class' => 'AppBundle:gameObjectValue',
                'choice_label' => 'name',
            ))
            ->add('costNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'cost',
            ))
            ->add('prod', EntityType::class, array(
                'class' => 'AppBundle:gameObjectValue',
                'choice_label' => 'name',
            ))
            ->add('prodNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'prod',
            ))
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:gameObjectCategory',
                'choice_label' => 'name',
            ))
            ->add('categoryNew', new EmbedItemForm(), array(
                'required' => false,
                'mapped' => false,
                'property_path' => 'category',
            ))
            ->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();

                if (!empty($data['categoryNew']['name'])) {
                    $form->remove('category');

                    $form->add('categoryNew', new EmbedItemForm(), array(
                        'required' => true,
                        'mapped' => true,
                        'property_path' => 'category'
                    ));
                }
            })*/
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