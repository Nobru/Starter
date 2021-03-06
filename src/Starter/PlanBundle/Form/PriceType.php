<?php

namespace Starter\PlanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PriceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price')
            ->add('plan')
            ->add('period')
            ->add(
                'is_default',
                'choice',
                [
                    'label' => 'Default price?',
                    'choices' => ['0' => 'No', '1' => 'Yes']
                ]
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Starter\PlanBundle\Entity\Price'
        ));
    }

    public function getName()
    {
        return 'starter_planbundle_pricetype';
    }
}
