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
class Celebros_Conversionpro_Model_Api_QwiserSearchPath
{
	var $Count = 0;
	var $Items;
	
	Function Celebros_Conversionpro_Model_Api_QwiserSearchPath($xml_SearchPath)
	{
		if(is_object($xml_SearchPath))
		{
			$xml_SearchPathNodes = $xml_SearchPath->child_nodes();
			$xml_SearchPathNodes = getDomElements($xml_SearchPathNodes);
			$this->Count = count($xml_SearchPathNodes);
		
			for ($i = 0 ; $i < $this->Count;$i++)
			{
				$SearchPathNode = $xml_SearchPathNodes[$i];
				$search_path_search_path_entry = new Celebros_Conversionpro_Model_Api_QwiserSearchPathEntry($SearchPathNode);
// 				$this->Items[$i] = Mage::getModel('conversionpro/Api_QwiserSearchPathEntry', $SearchPathNode);
				$this->Items[$i] = $search_path_search_path_entry;
			}
		}	
	} 
}
?>