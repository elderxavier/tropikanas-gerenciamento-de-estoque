<?php
 
class ElderXavier_Stockmanager_Block_Adminhtml_Stockmanager_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
                                        'id' => 'edit_form',
                                        'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),                                        
                                        'method' => 'post',
                                     )
        );
        $fieldset   = $form->addFieldset('Description of Template', array(
            'legend'    => Mage::helper('stockmanager')->__("New"),
            'class'     => 'fieldset-wide-new',
        ));
        $fieldset->addField('Template Name', 'text', array(
            'name'      => 'template_name',
            'label'     => Mage::helper('stockmanager')->__('Template Name'),
            'title'     => Mage::helper('stockmanager')->__('template name'),
            'required'  => true,
        ));

        $fieldset->addField('id', 'text', array(
            'name'      => 'template_id',
            'label'     => Mage::helper('stockmanager')->__('Tempalte Id'),
            'title'     => Mage::helper('stockmanager')->__('template id'),            
            'required'  => true,
        ));

        $fieldset   = $form->addFieldset('Edit Template', array(
            'legend'    => Mage::helper('stockmanager')->__("Edit Template Mail"),
            'class'     => 'fieldset-wide',
        ));
        
        $fieldset->addField('From', 'text', array(
            'name'      => 'fromemail',
            'label'     => Mage::helper('stockmanager')->__('From (Email):'),
            'title'     => Mage::helper('stockmanager')->__('from email'),
            'style'     => 'width: 280px !important;',
            'required'  => true,
        ));

        $fieldset->addField('Reply', 'text', array(
            'name'      => 'reply',
            'label'     => Mage::helper('stockmanager')->__('Reply-To (email):'),
            'title'     => Mage::helper('stockmanager')->__('reply to'),
            'style'     => 'width: 280px !important;',
            'required'  => true,
        ));

        $fieldset->addField('Subject:', 'text', array(
            'name'      => 'subject',
            'label'     => Mage::helper('stockmanager')->__('Subject:'),
            'title'     => Mage::helper('stockmanager')->__('subject'),
            'style'     => 'width: 280px !important;',
            'required'  => true,
        ));        
 
        $wysiwygConfig = Mage::getSingleton('cms/wysiwyg_config');
        $fieldset->addField('description', 'editor', array(
            'name'      => 'description',
            'label'     => Mage::helper('stockmanager')->__('Description'),
            'title'     => Mage::helper('stockmanager')->__('Description'),
            'style'     => 'height: 600px;',
            'wysiwyg'   => true,
            'required'  => true,
            'config'    => $wysiwygConfig
        ));
        
 
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}