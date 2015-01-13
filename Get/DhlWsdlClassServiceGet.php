<?php
/**
 * File for class DhlWsdlClassServiceGet
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassServiceGet originally named Get
 * @package DhlWsdlClass
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassServiceGet extends DhlWsdlClassWsdlClass
{
    /**
     * Method to call the operation originally named getVersion
     * Documentation : Sprawdzenie wersji webapi.
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetVersion $_dhlWsdlClassStructGetVersion
     * @return DhlWsdlClassStructGetVersionResponse
     */
    public function getVersion()
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getVersion());
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getMyShipments
     * Documentation : Pobieranie podstawowych danych o przesyłkachMaksymalny zakres dat to 90 dni. Zwracane jest maksimum 100 przesyłek, jeśli jest ich więcej należy korzystać z offsetu.
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetMyShipments $_dhlWsdlClassStructGetMyShipments
     * @return DhlWsdlClassStructGetMyShipmentsResponse
     */
    public function getMyShipments(DhlWsdlClassStructGetMyShipments $_dhlWsdlClassStructGetMyShipments)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getMyShipments($_dhlWsdlClassStructGetMyShipments));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getMyShipmentsCount
     * Documentation : Pobieranie podstawowych danych o ilości przesyłekMaksymalny zakres dat to 90 dni.
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetMyShipmentsCount $_dhlWsdlClassStructGetMyShipmentsCount
     * @return DhlWsdlClassStructGetMyShipmentsCountResponse
     */
    public function getMyShipmentsCount(DhlWsdlClassStructGetMyShipmentsCount $_dhlWsdlClassStructGetMyShipmentsCount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getMyShipmentsCount($_dhlWsdlClassStructGetMyShipmentsCount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPostalCodeServices
     * Documentation : Weryfikacja poprawności kodu pocztowego oraz pobranie dostępnychw danej chwili usług przewozowych.Odpowiedź metody jest funkcją godziny, w jakiej przychodzi żądanie (usługi terminowesą dostępne do ustalonych godzin).
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetPostalCodeServices $_dhlWsdlClassStructGetPostalCodeServices
     * @return DhlWsdlClassStructGetPostalCodeServicesResponse
     */
    public function getPostalCodeServices(DhlWsdlClassStructGetPostalCodeServices $_dhlWsdlClassStructGetPostalCodeServices)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPostalCodeServices($_dhlWsdlClassStructGetPostalCodeServices));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getTrackAndTraceInfo
     * Documentation : Pobranie danych na temat zdarzeń związanych z przesyłką o przekazanym identyfikatorze.
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetTrackAndTraceInfo $_dhlWsdlClassStructGetTrackAndTraceInfo
     * @return DhlWsdlClassStructGetTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo(DhlWsdlClassStructGetTrackAndTraceInfo $_dhlWsdlClassStructGetTrackAndTraceInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTrackAndTraceInfo($_dhlWsdlClassStructGetTrackAndTraceInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getLabels
     * Documentation : Pobranie różnego rodzaju etykiet związanych z przesyłkami.Za jednym wywołaniem można pobrać maksymalnie 3 etykiety
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetLabels $_dhlWsdlClassStructGetLabels
     * @return DhlWsdlClassStructGetLabelsResponse
     */
    public function getLabels(DhlWsdlClassStructGetLabels $_dhlWsdlClassStructGetLabels)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getLabels($_dhlWsdlClassStructGetLabels));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPnp
     * Documentation : Pobranie raportu Potwierdzenie Nadanych Przesyłek (PNP)
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetPnp $_dhlWsdlClassStructGetPnp
     * @return DhlWsdlClassStructGetPnpResponse
     */
    public function getPnp(DhlWsdlClassStructGetPnp $_dhlWsdlClassStructGetPnp)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPnp($_dhlWsdlClassStructGetPnp));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getShipmentScan
     * Documentation : Pobieranie skanów LP w systemie DHL
     * @uses DhlWsdlClassWsdlClass::getSoapClient()
     * @uses DhlWsdlClassWsdlClass::setResult()
     * @uses DhlWsdlClassWsdlClass::saveLastError()
     * @param DhlWsdlClassStructGetShipmentScan $_dhlWsdlClassStructGetShipmentScan
     * @return DhlWsdlClassStructGetShipmentScanResponse
     */
    public function getShipmentScan(DhlWsdlClassStructGetShipmentScan $_dhlWsdlClassStructGetShipmentScan)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentScan($_dhlWsdlClassStructGetShipmentScan));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DhlWsdlClassWsdlClass::getResult()
     * @return DhlWsdlClassStructGetLabelsResponse|DhlWsdlClassStructGetMyShipmentsCountResponse|DhlWsdlClassStructGetMyShipmentsResponse|DhlWsdlClassStructGetPnpResponse|DhlWsdlClassStructGetPostalCodeServicesResponse|DhlWsdlClassStructGetShipmentScanResponse|DhlWsdlClassStructGetTrackAndTraceInfoResponse|DhlWsdlClassStructGetVersionResponse
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
