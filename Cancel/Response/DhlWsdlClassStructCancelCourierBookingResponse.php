<?php
/**
 * File for class DhlWsdlClassStructCancelCourierBookingResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructCancelCourierBookingResponse originally named cancelCourierBookingResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructCancelCourierBookingResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The cancelCourierBookingResult
     * @var DhlWsdlClassStructArrayOfDeletenotification
     */
    public $cancelCourierBookingResult;
    /**
     * Constructor method for cancelCourierBookingResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructArrayOfDeletenotification $_cancelCourierBookingResult
     * @return DhlWsdlClassStructCancelCourierBookingResponse
     */
    public function __construct($_cancelCourierBookingResult = NULL)
    {
        parent::__construct(array('cancelCourierBookingResult'=>($_cancelCourierBookingResult instanceof DhlWsdlClassStructArrayOfDeletenotification)?$_cancelCourierBookingResult:new DhlWsdlClassStructArrayOfDeletenotification($_cancelCourierBookingResult)),false);
    }
    /**
     * Get cancelCourierBookingResult value
     * @return DhlWsdlClassStructArrayOfDeletenotification|null
     */
    public function getCancelCourierBookingResult()
    {
        return $this->cancelCourierBookingResult;
    }
    /**
     * Set cancelCourierBookingResult value
     * @param DhlWsdlClassStructArrayOfDeletenotification $_cancelCourierBookingResult the cancelCourierBookingResult
     * @return DhlWsdlClassStructArrayOfDeletenotification
     */
    public function setCancelCourierBookingResult($_cancelCourierBookingResult)
    {
        return ($this->cancelCourierBookingResult = $_cancelCourierBookingResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructCancelCourierBookingResponse
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
