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
class Celebros_Conversionpro_Model_Api_QwiserSpellerInformation 
{
	var $AdditionalSuggestions;
	var $SpellerAutoCorrection;
	var $SpellingErrorDetected = "false";
	
	function Celebros_Conversionpro_Model_Api_QwiserSpellerInformation($xml_SpellerInformation)
	{		
		if(is_object($xml_SpellerInformation))
		{
			$this->SpellingErrorDetected = $xml_SpellerInformation->get_attribute("SpellingErrorDetected");
			$this->SpellerAutoCorrection = $xml_SpellerInformation->get_attribute("SpellerAutoCorrection");
			$this->AdditionalSuggestions = GetQwiserSimpleStringCollection(current(getDomElements($xml_SpellerInformation->child_nodes())));
		}
	}
}
?>