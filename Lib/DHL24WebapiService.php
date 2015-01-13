<?php

namespace Lib;

class DHL24WebapiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getVersion' => 'Lib\\getVersion',
      'getVersionResponse' => 'Lib\\getVersionResponse',
      'AuthData' => 'Lib\\AuthData',
      'AddressData' => 'Lib\\AddressData',
      'ReceiverAddressData' => 'Lib\\ReceiverAddressData',
      'NeighbourAddress' => 'Lib\\NeighbourAddress',
      'PieceDefinition' => 'Lib\\PieceDefinition',
      'ArrayOfPiecedefinition' => 'Lib\\ArrayOfPiecedefinition',
      'PaymentData' => 'Lib\\PaymentData',
      'ServiceDefinition' => 'Lib\\ServiceDefinition',
      'ShipmentFullData' => 'Lib\\ShipmentFullData',
      'ArrayOfShipmentfulldata' => 'Lib\\ArrayOfShipmentfulldata',
      'createShipments' => 'Lib\\createShipments',
      'ShipmentBasicData' => 'Lib\\ShipmentBasicData',
      'ArrayOfShipmentbasicdata' => 'Lib\\ArrayOfShipmentbasicdata',
      'createShipmentsResponse' => 'Lib\\createShipmentsResponse',
      'ArrayOfString' => 'Lib\\ArrayOfString',
      'deleteShipments' => 'Lib\\deleteShipments',
      'DeleteNotification' => 'Lib\\DeleteNotification',
      'ArrayOfDeletenotification' => 'Lib\\ArrayOfDeletenotification',
      'deleteShipmentsResponse' => 'Lib\\deleteShipmentsResponse',
      'getMyShipments' => 'Lib\\getMyShipments',
      'getMyShipmentsResponse' => 'Lib\\getMyShipmentsResponse',
      'getMyShipmentsCount' => 'Lib\\getMyShipmentsCount',
      'getMyShipmentsCountResponse' => 'Lib\\getMyShipmentsCountResponse',
      'getPostalCodeServices' => 'Lib\\getPostalCodeServices',
      'PostalCodeServicesResponse' => 'Lib\\PostalCodeServicesResponse',
      'getPostalCodeServicesResponse' => 'Lib\\getPostalCodeServicesResponse',
      'getTrackAndTraceInfo' => 'Lib\\getTrackAndTraceInfo',
      'TrackAndTraceEvent' => 'Lib\\TrackAndTraceEvent',
      'ArrayOfTrackandtraceevent' => 'Lib\\ArrayOfTrackandtraceevent',
      'TrackAndTraceResponse' => 'Lib\\TrackAndTraceResponse',
      'getTrackAndTraceInfoResponse' => 'Lib\\getTrackAndTraceInfoResponse',
      'ShipmentOrderInfo' => 'Lib\\ShipmentOrderInfo',
      'bookCourier' => 'Lib\\bookCourier',
      'bookCourierResponse' => 'Lib\\bookCourierResponse',
      'cancelCourierBooking' => 'Lib\\cancelCourierBooking',
      'cancelCourierBookingResponse' => 'Lib\\cancelCourierBookingResponse',
      'ItemToPrint' => 'Lib\\ItemToPrint',
      'ArrayOfItemtoprint' => 'Lib\\ArrayOfItemtoprint',
      'getLabels' => 'Lib\\getLabels',
      'ItemToPrintResponse' => 'Lib\\ItemToPrintResponse',
      'ArrayOfItemtoprintresponse' => 'Lib\\ArrayOfItemtoprintresponse',
      'getLabelsResponse' => 'Lib\\getLabelsResponse',
      'PnpRequest' => 'Lib\\PnpRequest',
      'getPnp' => 'Lib\\getPnp',
      'PnpResponse' => 'Lib\\PnpResponse',
      'getPnpResponse' => 'Lib\\getPnpResponse',
      'getShipmentScan' => 'Lib\\getShipmentScan',
      'ScanToPrintResponse' => 'Lib\\ScanToPrintResponse',
      'getShipmentScanResponse' => 'Lib\\getShipmentScanResponse',
      'Billing' => 'Lib\\Billing',
      'Service' => 'Lib\\Service',
      'ArrayOfService' => 'Lib\\ArrayOfService',
      'ShipmentTime' => 'Lib\\ShipmentTime',
      'ShipmentInfo' => 'Lib\\ShipmentInfo',
      'PreavisoContact' => 'Lib\\PreavisoContact',
      'Address' => 'Lib\\Address',
      'Addressat' => 'Lib\\Addressat',
      'ReceiverAddress' => 'Lib\\ReceiverAddress',
      'ReceiverAddressat' => 'Lib\\ReceiverAddressat',
      'Ship' => 'Lib\\Ship',
      'Package' => 'Lib\\Package',
      'ArrayOfPackage' => 'Lib\\ArrayOfPackage',
      'CreateShipmentRequest' => 'Lib\\CreateShipmentRequest',
      'createShipment' => 'Lib\\createShipment',
      'Label' => 'Lib\\Label',
      'CreateShipmentResponse' => 'Lib\\CreateShipmentResponse',
      'createShipmentResponse' => 'Lib\\createShipmentResponse',
      'DeleteShipmentRequest' => 'Lib\\DeleteShipmentRequest',
      'deleteShipment' => 'Lib\\deleteShipment',
      'DeleteShipmentResponse' => 'Lib\\DeleteShipmentResponse',
      'deleteShipmentResponse' => 'Lib\\deleteShipmentResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://dhl24.com.pl/webapi2')
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
