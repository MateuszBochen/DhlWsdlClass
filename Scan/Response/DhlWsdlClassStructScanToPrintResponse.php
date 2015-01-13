<?php
/**
 * File for class DhlWsdlClassStructScanToPrintResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructScanToPrintResponse originally named ScanToPrintResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructScanToPrintResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The scanData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $scanData;
    /**
     * The scanMimeType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $scanMimeType;
    /**
     * Constructor method for ScanToPrintResponse
     * @see parent::__construct()
     * @param string $_scanData
     * @param string $_scanMimeType
     * @return DhlWsdlClassStructScanToPrintResponse
     */
    public function __construct($_scanData = NULL,$_scanMimeType = NULL)
    {
        parent::__construct(array('scanData'=>$_scanData,'scanMimeType'=>$_scanMimeType),false);
    }
    /**
     * Get scanData value
     * @return string|null
     */
    public function getScanData()
    {
        return $this->scanData;
    }
    /**
     * Set scanData value
     * @param string $_scanData the scanData
     * @return string
     */
    public function setScanData($_scanData)
    {
        return ($this->scanData = $_scanData);
    }
    /**
     * Get scanMimeType value
     * @return string|null
     */
    public function getScanMimeType()
    {
        return $this->scanMimeType;
    }
    /**
     * Set scanMimeType value
     * @param string $_scanMimeType the scanMimeType
     * @return string
     */
    public function setScanMimeType($_scanMimeType)
    {
        return ($this->scanMimeType = $_scanMimeType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructScanToPrintResponse
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
