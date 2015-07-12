<?php
 
class ElderXavier_Stockmanager_Block_Adminhtml_Stockmanager_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
 
    public function __construct()
    {
        parent::__construct();
        $this->setId('stockmanager_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('stockmanager')->__('Template Information')); 
    }
 
    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('stockmanager')->__('Settings Template'),
            'title'     => Mage::helper('stockmanager')->__('Settings Template'),            
            'active' => true,            
        ));
       //'content'   => $this->getLayout()->createBlock('stockmanager/adminhtml_stockmanager_edit_tab_form')->toHtml(),
        return parent::_beforeToHtml();
    }
}