<?php

namespace DhlWsdlClass\TestLib;

class DHL24WebapiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getVersion' => 'DhlWsdlClass\\TestLib\\getVersion',
      'getVersionResponse' => 'DhlWsdlClass\\TestLib\\getVersionResponse',
      'AuthData' => 'DhlWsdlClass\\TestLib\\AuthData',
      'AddressData' => 'DhlWsdlClass\\TestLib\\AddressData',
      'ReceiverAddressData' => 'DhlWsdlClass\\TestLib\\ReceiverAddressData',
      'NeighbourAddress' => 'DhlWsdlClass\\TestLib\\NeighbourAddress',
      'PieceDefinition' => 'DhlWsdlClass\\TestLib\\PieceDefinition',
      'ArrayOfPiecedefinition' => 'DhlWsdlClass\\TestLib\\ArrayOfPiecedefinition',
      'PaymentData' => 'DhlWsdlClass\\TestLib\\PaymentData',
      'ServiceDefinition' => 'DhlWsdlClass\\TestLib\\ServiceDefinition',
      'ShipmentFullData' => 'DhlWsdlClass\\TestLib\\ShipmentFullData',
      'ArrayOfShipmentfulldata' => 'DhlWsdlClass\\TestLib\\ArrayOfShipmentfulldata',
      'createShipments' => 'DhlWsdlClass\\TestLib\\createShipments',
      'ShipmentBasicData' => 'DhlWsdlClass\\TestLib\\ShipmentBasicData',
      'ArrayOfShipmentbasicdata' => 'DhlWsdlClass\\TestLib\\ArrayOfShipmentbasicdata',
      'createShipmentsResponse' => 'DhlWsdlClass\\TestLib\\createShipmentsResponse',
      'ArrayOfString' => 'DhlWsdlClass\\TestLib\\ArrayOfString',
      'deleteShipments' => 'DhlWsdlClass\\TestLib\\deleteShipments',
      'DeleteNotification' => 'DhlWsdlClass\\TestLib\\DeleteNotification',
      'ArrayOfDeletenotification' => 'DhlWsdlClass\\TestLib\\ArrayOfDeletenotification',
      'deleteShipmentsResponse' => 'DhlWsdlClass\\TestLib\\deleteShipmentsResponse',
      'getMyShipments' => 'DhlWsdlClass\\TestLib\\getMyShipments',
      'getMyShipmentsResponse' => 'DhlWsdlClass\\TestLib\\getMyShipmentsResponse',
      'getMyShipmentsCount' => 'DhlWsdlClass\\TestLib\\getMyShipmentsCount',
      'getMyShipmentsCountResponse' => 'DhlWsdlClass\\TestLib\\getMyShipmentsCountResponse',
      'getPostalCodeServices' => 'DhlWsdlClass\\TestLib\\getPostalCodeServices',
      'PostalCodeServicesResponse' => 'DhlWsdlClass\\TestLib\\PostalCodeServicesResponse',
      'getPostalCodeServicesResponse' => 'DhlWsdlClass\\TestLib\\getPostalCodeServicesResponse',
      'getTrackAndTraceInfo' => 'DhlWsdlClass\\TestLib\\getTrackAndTraceInfo',
      'TrackAndTraceEvent' => 'DhlWsdlClass\\TestLib\\TrackAndTraceEvent',
      'ArrayOfTrackandtraceevent' => 'DhlWsdlClass\\TestLib\\ArrayOfTrackandtraceevent',
      'TrackAndTraceResponse' => 'DhlWsdlClass\\TestLib\\TrackAndTraceResponse',
      'getTrackAndTraceInfoResponse' => 'DhlWsdlClass\\TestLib\\getTrackAndTraceInfoResponse',
      'ShipmentOrderInfo' => 'DhlWsdlClass\\TestLib\\ShipmentOrderInfo',
      'bookCourier' => 'DhlWsdlClass\\TestLib\\bookCourier',
      'bookCourierResponse' => 'DhlWsdlClass\\TestLib\\bookCourierResponse',
      'cancelCourierBooking' => 'DhlWsdlClass\\TestLib\\cancelCourierBooking',
      'cancelCourierBookingResponse' => 'DhlWsdlClass\\TestLib\\cancelCourierBookingResponse',
      'ItemToPrint' => 'DhlWsdlClass\\TestLib\\ItemToPrint',
      'ArrayOfItemtoprint' => 'DhlWsdlClass\\TestLib\\ArrayOfItemtoprint',
      'getLabels' => 'DhlWsdlClass\\TestLib\\getLabels',
      'ItemToPrintResponse' => 'DhlWsdlClass\\TestLib\\ItemToPrintResponse',
      'ArrayOfItemtoprintresponse' => 'DhlWsdlClass\\TestLib\\ArrayOfItemtoprintresponse',
      'getLabelsResponse' => 'DhlWsdlClass\\TestLib\\getLabelsResponse',
      'PnpRequest' => 'DhlWsdlClass\\TestLib\\PnpRequest',
      'getPnp' => 'DhlWsdlClass\\TestLib\\getPnp',
      'PnpResponse' => 'DhlWsdlClass\\TestLib\\PnpResponse',
      'getPnpResponse' => 'DhlWsdlClass\\TestLib\\getPnpResponse',
      'getShipmentScan' => 'DhlWsdlClass\\TestLib\\getShipmentScan',
      'ScanToPrintResponse' => 'DhlWsdlClass\\TestLib\\ScanToPrintResponse',
      'getShipmentScanResponse' => 'DhlWsdlClass\\TestLib\\getShipmentScanResponse',
      'Billing' => 'DhlWsdlClass\\TestLib\\Billing',
      'Service' => 'DhlWsdlClass\\TestLib\\Service',
      'ArrayOfService' => 'DhlWsdlClass\\TestLib\\ArrayOfService',
      'ShipmentTime' => 'DhlWsdlClass\\TestLib\\ShipmentTime',
      'ShipmentInfo' => 'DhlWsdlClass\\TestLib\\ShipmentInfo',
      'PreavisoContact' => 'DhlWsdlClass\\TestLib\\PreavisoContact',
      'Address' => 'DhlWsdlClass\\TestLib\\Address',
      'Addressat' => 'DhlWsdlClass\\TestLib\\Addressat',
      'ReceiverAddress' => 'DhlWsdlClass\\TestLib\\ReceiverAddress',
      'ReceiverAddressat' => 'DhlWsdlClass\\TestLib\\ReceiverAddressat',
      'Ship' => 'DhlWsdlClass\\TestLib\\Ship',
      'Package' => 'DhlWsdlClass\\TestLib\\Package',
      'ArrayOfPackage' => 'DhlWsdlClass\\TestLib\\ArrayOfPackage',
      'CreateShipmentRequest' => 'DhlWsdlClass\\TestLib\\CreateShipmentRequest',
      'createShipment' => 'DhlWsdlClass\\TestLib\\createShipment',
      'Label' => 'DhlWsdlClass\\TestLib\\Label',
      'CreateShipmentResponse' => 'DhlWsdlClass\\TestLib\\CreateShipmentResponse',
      'createShipmentResponse' => 'DhlWsdlClass\\TestLib\\createShipmentResponse',
      'DeleteShipmentRequest' => 'DhlWsdlClass\\TestLib\\DeleteShipmentRequest',
      'deleteShipment' => 'DhlWsdlClass\\TestLib\\deleteShipment',
      'DeleteShipmentResponse' => 'DhlWsdlClass\\TestLib\\DeleteShipmentResponse',
      'deleteShipmentResponse' => 'DhlWsdlClass\\TestLib\\deleteShipmentResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://sandbox.dhl24.com.pl/webapi')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Sprawdzenie wersji webapi.
     *
     * @param getVersion $parameters
     * @return getVersionResponse
     */
    public function getVersion(getVersion $parameters)
    {
      return $this->__soapCall('getVersion', array($parameters));
    }

    /**
     * Definiowanie przesyłek w systemie DHL
     *
     * @param createShipments $parameters
     * @return createShipmentsResponse
     */
    public function createShipments(createShipments $parameters)
    {
      return $this->__soapCall('createShipments', array($parameters));
    }

    /**
     * Usuwanie przesyłek w systemie DHL
     *
     * @param deleteShipments $parameters
     * @return deleteShipmentsResponse
     */
    public function deleteShipments(deleteShipments $parameters)
    {
      return $this->__soapCall('deleteShipments', array($parameters));
    }

    /**
     * Pobieranie podstawowych danych o przesyłkach
     * Maksymalny zakres dat to 90 dni. Zwracane jest maksimum 100 przesyłek, jeśli jest ich więcej należy korzystać z offsetu.
     *
     * @param getMyShipments $parameters
     * @return getMyShipmentsResponse
     */
    public function getMyShipments(getMyShipments $parameters)
    {
      return $this->__soapCall('getMyShipments', array($parameters));
    }

    /**
     * Pobieranie podstawowych danych o ilości przesyłek
     * Maksymalny zakres dat to 90 dni.
     *
     * @param getMyShipmentsCount $parameters
     * @return getMyShipmentsCountResponse
     */
    public function getMyShipmentsCount(getMyShipmentsCount $parameters)
    {
      return $this->__soapCall('getMyShipmentsCount', array($parameters));
    }

    /**
     * Weryfikacja poprawności kodu pocztowego oraz pobranie dostępnych
     * w danej chwili usług przewozowych.
     * Odpowiedź metody jest funkcją godziny, w jakiej przychodzi żądanie (usługi terminowe
     * są dostępne do ustalonych godzin).
     *
     * @param getPostalCodeServices $parameters
     * @return getPostalCodeServicesResponse
     */
    public function getPostalCodeServices(getPostalCodeServices $parameters)
    {
      return $this->__soapCall('getPostalCodeServices', array($parameters));
    }

    /**
     * Pobranie danych na temat zdarzeń związanych z przesyłką o przekazanym identyfikatorze.
     *
     * @param getTrackAndTraceInfo $parameters
     * @return getTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo(getTrackAndTraceInfo $parameters)
    {
      return $this->__soapCall('getTrackAndTraceInfo', array($parameters));
    }

    /**
     * Zamawianie kuriera
     *
     * @param bookCourier $parameters
     * @return bookCourierResponse
     */
    public function bookCourier(bookCourier $parameters)
    {
      return $this->__soapCall('bookCourier', array($parameters));
    }

    /**
     * Anulowanie zamówionego kuriera
     *
     * @param cancelCourierBooking $parameters
     * @return cancelCourierBookingResponse
     */
    public function cancelCourierBooking(cancelCourierBooking $parameters)
    {
      return $this->__soapCall('cancelCourierBooking', array($parameters));
    }

    /**
     * Pobranie różnego rodzaju etykiet związanych z przesyłkami.
     * Za jednym wywołaniem można pobrać maksymalnie 3 etykiety
     *
     * @param getLabels $parameters
     * @return getLabelsResponse
     */
    public function getLabels(getLabels $parameters)
    {
      return $this->__soapCall('getLabels', array($parameters));
    }

    /**
     * Pobranie raportu Potwierdzenie Nadanych Przesyłek (PNP)
     *
     * @param getPnp $parameters
     * @return getPnpResponse
     */
    public function getPnp(getPnp $parameters)
    {
      return $this->__soapCall('getPnp', array($parameters));
    }

    /**
     * Pobieranie skanów LP w systemie DHL
     *
     * @param getShipmentScan $parameters
     * @return getShipmentScanResponse
     */
    public function getShipmentScan(getShipmentScan $parameters)
    {
      return $this->__soapCall('getShipmentScan', array($parameters));
    }

    /**
     * Definiowanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param createShipment $parameters
     * @return createShipmentResponse
     */
    public function createShipment(createShipment $parameters)
    {
      return $this->__soapCall('createShipment', array($parameters));
    }

    /**
     * Usuwanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param deleteShipment $parameters
     * @return deleteShipmentResponse
     */
    public function deleteShipment(deleteShipment $parameters)
    {
      return $this->__soapCall('deleteShipment', array($parameters));
    }

}
