<?php

namespace ComparateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class ComparateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entreprise', TextType::class, array(
                'attr' => array (
                    'placeholder' => 'Entreprise',
            )))
            ->add('produit', ChoiceType::class, array (
                'choices'  => array(
                    'ble' => 'Blé',
                    'mais' => 'Maïs',
                    'millet' => 'Millet',
                    'orge' => 'Orge',
                    'riz' => 'Riz',
                    'seigle' => 'Seige',
                    'sorgho' => 'Sorgho'
                ),
                'attr' => array (
                    'placeholder' => 'Produit',
                )))
            ->add('destination', ChoiceType::class, array (
                'choices'  => array(
                    'paris' => 'Paris',
                    'rouen' => 'Rouen',
                ),
                'attr' => array (
                    'placeholder' => 'Destination'
                )))
            ->add('prix', IntegerType::class, array (
                'attr' => array (
                    'placeholder' => 'Prix'
                )))
            ->add('proteines', NumberType::class, array (
                'attr' => array (
                    'placeholder' => 'Protéines'
                )))
            ->add('humidite', NumberType::class, array (
                'attr' => array (
                    'placeholder' => 'Humidité'
                )))
            ->add('ps', NumberType::class, array(
                'attr' => array(
                    'placeholder' => 'PS'
                )))
            ->add('hagberg', NumberType::class, array(
                'attr' => array(
                    'placeholder' => 'Hagberg'
                )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ComparateurBundle\Entity\Comparateur'
        ));
    }
}
