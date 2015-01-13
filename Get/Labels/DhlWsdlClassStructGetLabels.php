<?php
/**
 * File for class DhlWsdlClassStructGetLabels
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetLabels originally named getLabels
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetLabels extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The itemsToPrint
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfItemtoprint
     */
    public $itemsToPrint;
    /**
     * Constructor method for getLabels
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param DhlWsdlClassStructArrayOfItemtoprint $_itemsToPrint
     * @return DhlWsdlClassStructGetLabels
     */
    public function __construct($_authData = NULL,$_itemsToPrint = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'itemsToPrint'=>($_itemsToPrint instanceof DhlWsdlClassStructArrayOfItemtoprint)?$_itemsToPrint:new DhlWsdlClassStructArrayOfItemtoprint($_itemsToPrint)),false);
    }
    /**
     * Get authData value
     * @return DhlWsdlClassStructAuthData|null
     */
    public function getAuthData()
    {
        return $this->authData;
    }
    /**
     * Set authData value
     * @param DhlWsdlClassStructAuthData $_authData the authData
     * @return DhlWsdlClassStructAuthData
     */
    public function setAuthData($_authData)
    {
        return ($this->authData = $_authData);
    }
    /**
     * Get itemsToPrint value
     * @return DhlWsdlClassStructArrayOfItemtoprint|null
     */
    public function getItemsToPrint()
    {
        return $this->itemsToPrint;
    }
    /**
     * Set itemsToPrint value
     * @param DhlWsdlClassStructArrayOfItemtoprint $_itemsToPrint the itemsToPrint
     * @return DhlWsdlClassStructArrayOfItemtoprint
     */
    public function setItemsToPrint($_itemsToPrint)
    {
        return ($this->itemsToPrint = $_itemsToPrint);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetLabels
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
