<?php
 
class ElderXavier_Stockmanager_Block_Adminhtml_Stockmanager_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('stockmanager_form', array('legend'=>Mage::helper('stockmanager')->__('Item information')));
       
        $fieldset->addField('title', 'text', array(
            'label'     => Mage::helper('stockmanager')->__('Title'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'title',
        ));
 
        $fieldset->addField('status', 'select', array(
            'label'     => Mage::helper('stockmanager')->__('Status'),
            'name'      => 'status',
            'values'    => array(
                array(
                    'value'     => 1,
                    'label'     => Mage::helper('stockmanager')->__('Active'),
                ),
 
                array(
                    'value'     => 0,
                    'label'     => Mage::helper('stockmanager')->__('Inactive'),
                ),
            ),
        ));
       
        $fieldset->addField('content', 'editor', array(
            'name'      => 'content',
            'label'     => Mage::helper('stockmanager')->__('Content'),
            'title'     => Mage::helper('stockmanager')->__('Content'),
            'style'     => 'width:98%; height:400px;',
            'wysiwyg'   => false,
            'required'  => true,
        ));
       
        if ( Mage::getSingleton('adminhtml/session')->getstockmanagerData() )
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getstockmanagerData());
            Mage::getSingleton('adminhtml/session')->setstockmanagerData(null);
        } elseif ( Mage::registry('stockmanager_data') ) {
            $form->setValues(Mage::registry('stockmanager_data')->getData());
        }
        return parent::_prepareForm();
    }
}
