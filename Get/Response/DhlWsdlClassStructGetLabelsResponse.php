<?php
/**
 * File for class DhlWsdlClassStructGetLabelsResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetLabelsResponse originally named getLabelsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetLabelsResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getLabelsResult
     * @var DhlWsdlClassStructArrayOfItemtoprintresponse
     */
    public $getLabelsResult;
    /**
     * Constructor method for getLabelsResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructArrayOfItemtoprintresponse $_getLabelsResult
     * @return DhlWsdlClassStructGetLabelsResponse
     */
    public function __construct($_getLabelsResult = NULL)
    {
        parent::__construct(array('getLabelsResult'=>($_getLabelsResult instanceof DhlWsdlClassStructArrayOfItemtoprintresponse)?$_getLabelsResult:new DhlWsdlClassStructArrayOfItemtoprintresponse($_getLabelsResult)),false);
    }
    /**
     * Get getLabelsResult value
     * @return DhlWsdlClassStructArrayOfItemtoprintresponse|null
     */
    public function getGetLabelsResult()
    {
        return $this->getLabelsResult;
    }
    /**
     * Set getLabelsResult value
     * @param DhlWsdlClassStructArrayOfItemtoprintresponse $_getLabelsResult the getLabelsResult
     * @return DhlWsdlClassStructArrayOfItemtoprintresponse
     */
    public function setGetLabelsResult($_getLabelsResult)
    {
        return ($this->getLabelsResult = $_getLabelsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetLabelsResponse
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
