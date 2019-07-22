<?php

namespace App\AppBundle\Form;

use App\AppBundle\Entity\Venda;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataCompra')
            ->add('valor')
            ->add('comissao')
            ->add('empresa')
            ->add('cliente');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => App\AppBundle\Entity\Venda::class
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'venda';
    }
}
