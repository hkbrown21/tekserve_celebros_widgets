<?php
/**
 * Celebros Qwiser - WordPress
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish correct extension functionality.
 * If you wish to customize it, please contact Celebros.
 *
 * @category    Celebros
 * @package     Celebros_Conversionpro
 *
 */
class Celebros_Conversionpro_Model_Api_QwiserProducts
{
	var $Count = 0;	//the number of products.
	var $Items;	//indexer .
	 
	
	Function Celebros_Conversionpro_Model_Api_QwiserProducts($xml_Products)
	{
		if(is_object($xml_Products))
		{
			$xml_productsNodes = $xml_Products->child_nodes();
			$xml_productsNodes = getDomElements($xml_productsNodes);
			$this->Count = count($xml_productsNodes);

			for ($i = 0 ; $i <= $this->Count - 1;$i++)
			{
				$ProdNode = $xml_productsNodes[$i];
				
				$products_product = new Celebros_Conversionpro_Model_Api_QwiserProduct($ProdNode);
// 				$this->Items[$i] = Mage::getModel('conversionpro/Product', $ProdNode);
				$this->Items[$i] = $products_product;
				
			}
		}
	}


}
?>