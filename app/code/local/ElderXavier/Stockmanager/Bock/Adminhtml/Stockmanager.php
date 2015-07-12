<?php

class ElderXavier_Stockmanager_Block_Adminhtml_Stockmanager extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_stockmanager';
        $this->_blockGroup = 'stockmanager';
        $this->_headerText = Mage::helper('stockmanager')->__('Send E-Mail Manager');
        $this->_addButtonLabel = Mage::helper('stockmanager')->__('Add Item');  


        parent::__construct();
    }
}