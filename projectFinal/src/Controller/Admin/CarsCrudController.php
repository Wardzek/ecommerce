<?php

namespace App\Controller\Admin;

use App\Entity\Cars;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CarsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cars::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('category'),
            TextField::new('title'),
            SlugField::new('slug')->setTargetFieldName('title'),
            TextEditorField::new('content'),
            BooleanField::new('online'),
            TextField::new('attachmentFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('attachment')->setBasePath('uploads/attchments')->onlyOnIndex(),
            TextareaField::new('subtitle'),
            MoneyField::new('price')->setCurrency('EUR'),
            DateField::new('createdAt')
        ];
    }

}
