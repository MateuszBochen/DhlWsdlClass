<?php
/**
 * File for class DhlWsdlClassStructBookCourierResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructBookCourierResponse originally named bookCourierResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructBookCourierResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The bookCourierResult
     * @var DhlWsdlClassStructArrayOfString
     */
    public $bookCourierResult;
    /**
     * Constructor method for bookCourierResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructArrayOfString $_bookCourierResult
     * @return DhlWsdlClassStructBookCourierResponse
     */
    public function __construct($_bookCourierResult = NULL)
    {
        parent::__construct(array('bookCourierResult'=>($_bookCourierResult instanceof DhlWsdlClassStructArrayOfString)?$_bookCourierResult:new DhlWsdlClassStructArrayOfString($_bookCourierResult)),false);
    }
    /**
     * Get bookCourierResult value
     * @return DhlWsdlClassStructArrayOfString|null
     */
    public function getBookCourierResult()
    {
        return $this->bookCourierResult;
    }
    /**
     * Set bookCourierResult value
     * @param DhlWsdlClassStructArrayOfString $_bookCourierResult the bookCourierResult
     * @return DhlWsdlClassStructArrayOfString
     */
    public function setBookCourierResult($_bookCourierResult)
    {
        return ($this->bookCourierResult = $_bookCourierResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructBookCourierResponse
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
