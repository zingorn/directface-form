<?php
namespace Directface\Form\View\Helper;

use Zend\Form\FormInterface;
use Zend\Form\View\Helper\Form as ZendFormHelper;
class Form extends ZendFormHelper
{
    public function render(FormInterface $form)
    {
        $form->prepareElement($form);
        return parent::render($form); // TODO: Change the autogenerated stub
    }

}