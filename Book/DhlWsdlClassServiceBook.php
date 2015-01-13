<?php
/**
 * File for class DhlWsdlClassServiceBook
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassServiceBook originally named Book
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassServiceBook extends DhlWsdlClassWsdlClass
{
    /**
     * Method to call the operation originally named bookCourier
     * Documentation : Zamawianie kuriera
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructBookCourier $_dhlWsdlClassStructBookCourier
     * @return DhlWsdlClassStructBookCourierResponse
     */
    public function bookCourier(DhlWsdlClassStructBookCourier $_dhlWsdlClassStructBookCourier)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->bookCourier($_dhlWsdlClassStructBookCourier));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DhlWsdlClassWsdlClass::getResult()
     * @return DhlWsdlClassStructBookCourierResponse
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
