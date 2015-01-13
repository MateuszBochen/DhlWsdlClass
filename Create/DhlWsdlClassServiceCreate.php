<?php
/**
 * File for class DhlWsdlClassServiceCreate
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassServiceCreate originally named Create
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassServiceCreate extends DhlWsdlClassWsdlClass
{
    /**
     * Method to call the operation originally named createShipments
     * Documentation : Definiowanie przesyłek w systemie DHL
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructCreateShipments $_dhlWsdlClassStructCreateShipments
     * @return DhlWsdlClassStructCreateShipmentsResponse
     */
    public function createShipments(DhlWsdlClassStructCreateShipments $_dhlWsdlClassStructCreateShipments)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createShipments($_dhlWsdlClassStructCreateShipments));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createShipment
     * Documentation : Definiowanie przesyłki w systemie DHL - metoda agregująca
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructCreateShipment $_dhlWsdlClassStructCreateShipment
     * @return DhlWsdlClassStructCreateShipmentResponse
     */
    public function createShipment(DhlWsdlClassStructCreateShipment $_dhlWsdlClassStructCreateShipment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createShipment($_dhlWsdlClassStructCreateShipment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DhlWsdlClassWsdlClass::getResult()
     * @return DhlWsdlClassStructCreateShipmentResponse|DhlWsdlClassStructCreateShipmentsResponse
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
