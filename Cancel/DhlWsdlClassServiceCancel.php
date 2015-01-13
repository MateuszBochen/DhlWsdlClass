<?php
/**
 * File for class DhlWsdlClassServiceCancel
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassServiceCancel originally named Cancel
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassServiceCancel extends DhlWsdlClassWsdlClass
{
    /**
     * Method to call the operation originally named cancelCourierBooking
     * Documentation : Anulowanie zamówionego kuriera
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructCancelCourierBooking $_dhlWsdlClassStructCancelCourierBooking
     * @return DhlWsdlClassStructCancelCourierBookingResponse
     */
    public function cancelCourierBooking(DhlWsdlClassStructCancelCourierBooking $_dhlWsdlClassStructCancelCourierBooking)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->cancelCourierBooking($_dhlWsdlClassStructCancelCourierBooking));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DhlWsdlClassWsdlClass::getResult()
     * @return DhlWsdlClassStructCancelCourierBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
