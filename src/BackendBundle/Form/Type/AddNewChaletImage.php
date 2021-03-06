<?php

namespace BackendBundle\Form\Type;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AddNewChaletImage extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('imageFile', VichImageType::class, [
            'required' => true,
            'allow_delete' => true,
        ]);
        $builder->add('imageAlt', TextType::class, [
            'label' => 'Alt [EN]',
        ]);
        $builder->add('imageAltTrans', TextType::class, [
            'label' => 'Alt [De]',
        ]);
//        $builder->add('imageFile_thumb', VichImageType::class, [
//            'required' => true,
//            'allow_delete' => true,
//        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\GalleryChalet'
        ));
    }

    public function getName() {
        return 'add_gallery_chalet';
    }
}