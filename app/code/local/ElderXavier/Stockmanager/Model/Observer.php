<?php
class ElderXavier_Stockmanager_Model_Observer{
	 				
	
	public function custom_sales_order_cancel(Varien_Event_Observer $observer){		
        $order = $observer->getEvent()->getOrder();
        Mage::getSingleton('core/session')->addSuccess('OK class ElderXavier_Stockmanager_Model_Observer');
        

		try{
        
            $productIds = array();
        foreach ($order->getItemsCollection() as $item) {
            $productIds[] = $item->getProductId();
        }

        foreach ($productIds as $productId) {

            $product = Mage::getModel('catalog/product')
                ->setStoreId(Mage::app()->getStore()->getId())
                ->load($productId);

            if (! $product->isConfigurable()) {
                continue;
            }
            
            $childProducts = Mage::getModel('catalog/product_type_configurable')
                        ->getUsedProducts(null, $product);

            foreach($childProducts as $childProduct) {                
                if (! in_array($childProduct->getId(), $productIds)) {                    
                    $stockItem = Mage::getModel('cataloginventory/stock_item')
                                    ->loadByProduct($childProduct)
                                  	->addQty(1)  
                                    ->save()
                                ;
                }
                //->subtractQty(1)
            }
        }
			Mage::getSingleton('core/session')->addSuccess('OK observer'); 		
			
			}catch(Exeption $e){
				Mage::getSingleton('core/session')->addError('Erro : '.$e);			
			}
					
		
		}

		
}