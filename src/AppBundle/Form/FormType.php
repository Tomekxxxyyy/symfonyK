<?php
namespace AppBundle\Form;

use AppBundle\Entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Imię'))
            ->add('surname', TextType::class, array('label' => 'Nazwisko'))
            //->add('experience', RangeType::class, array('label' => 'Doświadczenie', 'attr' => array('min' => 0, 'max' => 25)))
            ->add('experience', TextType::class, array('label' => 'Doświadczenie'))
            ->add('city', TextType::class, array('label' => 'Miasto'))    
            ->add('country', CountryType::class, array('label' => 'Państwo'))
            ->add('availability', ChoiceType::class, array('label' => 'Dyspozycyjność', 'choices' => array('praca zdalna' => 'praca zdalna', 'praca na miejscu' => 'praca na miejscu'), 'multiple' => true, 'expanded' => true)) 
            ->add('profession', ChoiceType::class, array('label' => 'Profesja', 'choices' => array('Programista' => 'Programista', 'Koder' => 'Koder', 'Designer' => 'Designer')))    
            ->add('save', SubmitType::class, array('label' => 'Prześlij'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => \AppBundle\Entity\FormEntity::class,
        ));
    }
}
?>