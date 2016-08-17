<?php

namespace LocaestJLG\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReservationType extends AbstractType
{
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('nom')
    ->add('prenom')
    ->add('email')
    ->add('telephone')
    ->add('vehicule', ChoiceType::class, array(
      'choices' => array(
        'Audi A4' => 'Audi A4',
        'BMW Série 4 cabriolet' => 'BMW Série 4 cabriolet',
        'BMW Série 5' => 'BMW Série 5',
        'BMW X6' => 'BMW X6',
      )
    ))
    ->add('adresse')
    ->add('depart')
    ->add('heure', ChoiceType::class, array(
      'choices' => array(
        '08H00' => '08H00',
        '08H30' => '08H30',
        '09H00' => '09H00',
        '09H30' => '09H30',
        '10H00' => '10H00',
        '10H30' => '10H30',
        '11H00' => '11H00',
        '11H30' => '11H30',
        '12H00' => '12H00',
        '12H30' => '12H30',
        '13H00' => '13H00',
        '13H30' => '13H30',
        '14H00' => '14H00',
        '14H30' => '14H30',
        '15H00' => '15H00',
        '15H30' => '15H30',
        '16H00' => '16H00',
        '16H30' => '16H30',
        '17H00' => '17H00',
        '17H30' => '17H30',
        '18H00' => '18H00',
        '18H30' => '18H30',
        '19H00' => '19H00',
        '19H30' => '19H30',
        '20H00' => '20H00',
      )
    ))
    ;
  }

  /**
  * @param OptionsResolver $resolver
  */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'LocaestJLG\Bundle\Entity\Reservation'
    ));
  }
}
