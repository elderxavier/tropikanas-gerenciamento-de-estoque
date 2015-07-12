<?php
 
class ElderXavier_Stockmanager_Adminhtml_StockmanagerController extends Mage_Adminhtml_Controller_Action
{
 
    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('stockmanager/send')
            ->_addBreadcrumb(Mage::helper('stockmanager')->__('Items Manager'), Mage::helper('stockmanager')->__('Mass Mail'));                        
        return $this;
    }   
   
    public function indexAction() {
        
        //$this->_initAction();                                      
        echo 'ok';
        //$this->renderLayout();
        
    }
    
   
}