<?php
 
class ElderXavier_Stockmanager_Block_Adminhtml_Stockmanager_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
               
        $this->_objectId = 'id';
        $this->_blockGroup = 'stockmanager';
        $this->_controller = 'adminhtml_stockmanager';        
        $this->_updateButton('save', 'label', Mage::helper('stockmanager')->__('Save'));                
        $this->_addButton('delete', array(
            'label'     => Mage::helper('stockmanager')->__('Delete'),
            'onclick'   => 'setLocation(\'' . $this->getUrl('*/*/') . '\')',
            'class'     => 'delete_button'
        ), -1, 100, 'header');
    }
 
    public function getHeaderText()
    {
        if( Mage::registry('stockmanager_data') && Mage::registry('stockmanager_data')->getId() ) {
            return Mage::helper('stockmanager')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('stockmanager_data')->getTitle()));
        } else {
            return Mage::helper('stockmanager')->__('Edit Mail Template');
        }
    }
}