<?php
/**
 * File for class DhlWsdlClassStructGetMyShipments
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetMyShipments originally named getMyShipments
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetMyShipments extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The createdFrom
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $createdFrom;
    /**
     * The createdTo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $createdTo;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $offset;
    /**
     * Constructor method for getMyShipments
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param string $_createdFrom
     * @param string $_createdTo
     * @param int $_offset
     * @return DhlWsdlClassStructGetMyShipments
     */
    public function __construct($_authData = NULL,$_createdFrom = NULL,$_createdTo = NULL,$_offset = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'createdFrom'=>$_createdFrom,'createdTo'=>$_createdTo,'offset'=>$_offset),false);
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
     * Get createdFrom value
     * @return string|null
     */
    public function getCreatedFrom()
    {
        return $this->createdFrom;
    }
    /**
     * Set createdFrom value
     * @param string $_createdFrom the createdFrom
     * @return string
     */
    public function setCreatedFrom($_createdFrom)
    {
        return ($this->createdFrom = $_createdFrom);
    }
    /**
     * Get createdTo value
     * @return string|null
     */
    public function getCreatedTo()
    {
        return $this->createdTo;
    }
    /**
     * Set createdTo value
     * @param string $_createdTo the createdTo
     * @return string
     */
    public function setCreatedTo($_createdTo)
    {
        return ($this->createdTo = $_createdTo);
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetMyShipments
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
