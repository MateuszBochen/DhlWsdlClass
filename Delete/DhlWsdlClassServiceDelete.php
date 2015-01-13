<?php
/**
 * File for class DhlWsdlClassServiceDelete
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassServiceDelete originally named Delete
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassServiceDelete extends DhlWsdlClassWsdlClass
{
    /**
     * Method to call the operation originally named deleteShipments
     * Documentation : Usuwanie przesyłek w systemie DHL
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructDeleteShipments $_dhlWsdlClassStructDeleteShipments
     * @return DhlWsdlClassStructDeleteShipmentsResponse
     */
    public function deleteShipments(DhlWsdlClassStructDeleteShipments $_dhlWsdlClassStructDeleteShipments)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteShipments($_dhlWsdlClassStructDeleteShipments));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * Documentation : Usuwanie przesyłki w systemie DHL - metoda agregująca
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructDeleteShipment $_dhlWsdlClassStructDeleteShipment
     * @return DhlWsdlClassStructDeleteShipmentResponse
     */
    public function deleteShipment(DhlWsdlClassStructDeleteShipment $_dhlWsdlClassStructDeleteShipment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->deleteShipment($_dhlWsdlClassStructDeleteShipment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DhlWsdlClassWsdlClass::getResult()
     * @return DhlWsdlClassStructDeleteShipmentResponse|DhlWsdlClassStructDeleteShipmentsResponse
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
