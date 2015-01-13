<?php

namespace DhlWsdlClass\Lib;

class DHL24WebapiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getVersion' => 'DhlWsdlClass\\Lib\\getVersion',
      'getVersionResponse' => 'DhlWsdlClass\\Lib\\getVersionResponse',
      'AuthData' => 'DhlWsdlClass\\Lib\\AuthData',
      'AddressData' => 'DhlWsdlClass\\Lib\\AddressData',
      'ReceiverAddressData' => 'DhlWsdlClass\\Lib\\ReceiverAddressData',
      'NeighbourAddress' => 'DhlWsdlClass\\Lib\\NeighbourAddress',
      'PieceDefinition' => 'DhlWsdlClass\\Lib\\PieceDefinition',
      'ArrayOfPiecedefinition' => 'DhlWsdlClass\\Lib\\ArrayOfPiecedefinition',
      'PaymentData' => 'DhlWsdlClass\\Lib\\PaymentData',
      'ServiceDefinition' => 'DhlWsdlClass\\Lib\\ServiceDefinition',
      'ShipmentFullData' => 'DhlWsdlClass\\Lib\\ShipmentFullData',
      'ArrayOfShipmentfulldata' => 'DhlWsdlClass\\Lib\\ArrayOfShipmentfulldata',
      'createShipments' => 'DhlWsdlClass\\Lib\\createShipments',
      'ShipmentBasicData' => 'DhlWsdlClass\\Lib\\ShipmentBasicData',
      'ArrayOfShipmentbasicdata' => 'DhlWsdlClass\\Lib\\ArrayOfShipmentbasicdata',
      'createShipmentsResponse' => 'DhlWsdlClass\\Lib\\createShipmentsResponse',
      'ArrayOfString' => 'DhlWsdlClass\\Lib\\ArrayOfString',
      'deleteShipments' => 'DhlWsdlClass\\Lib\\deleteShipments',
      'DeleteNotification' => 'DhlWsdlClass\\Lib\\DeleteNotification',
      'ArrayOfDeletenotification' => 'DhlWsdlClass\\Lib\\ArrayOfDeletenotification',
      'deleteShipmentsResponse' => 'DhlWsdlClass\\Lib\\deleteShipmentsResponse',
      'getMyShipments' => 'DhlWsdlClass\\Lib\\getMyShipments',
      'getMyShipmentsResponse' => 'DhlWsdlClass\\Lib\\getMyShipmentsResponse',
      'getMyShipmentsCount' => 'DhlWsdlClass\\Lib\\getMyShipmentsCount',
      'getMyShipmentsCountResponse' => 'DhlWsdlClass\\Lib\\getMyShipmentsCountResponse',
      'getPostalCodeServices' => 'DhlWsdlClass\\Lib\\getPostalCodeServices',
      'PostalCodeServicesResponse' => 'DhlWsdlClass\\Lib\\PostalCodeServicesResponse',
      'getPostalCodeServicesResponse' => 'DhlWsdlClass\\Lib\\getPostalCodeServicesResponse',
      'getTrackAndTraceInfo' => 'DhlWsdlClass\\Lib\\getTrackAndTraceInfo',
      'TrackAndTraceEvent' => 'DhlWsdlClass\\Lib\\TrackAndTraceEvent',
      'ArrayOfTrackandtraceevent' => 'DhlWsdlClass\\Lib\\ArrayOfTrackandtraceevent',
      'TrackAndTraceResponse' => 'DhlWsdlClass\\Lib\\TrackAndTraceResponse',
      'getTrackAndTraceInfoResponse' => 'DhlWsdlClass\\Lib\\getTrackAndTraceInfoResponse',
      'ShipmentOrderInfo' => 'DhlWsdlClass\\Lib\\ShipmentOrderInfo',
      'bookCourier' => 'DhlWsdlClass\\Lib\\bookCourier',
      'bookCourierResponse' => 'DhlWsdlClass\\Lib\\bookCourierResponse',
      'cancelCourierBooking' => 'DhlWsdlClass\\Lib\\cancelCourierBooking',
      'cancelCourierBookingResponse' => 'DhlWsdlClass\\Lib\\cancelCourierBookingResponse',
      'ItemToPrint' => 'DhlWsdlClass\\Lib\\ItemToPrint',
      'ArrayOfItemtoprint' => 'DhlWsdlClass\\Lib\\ArrayOfItemtoprint',
      'getLabels' => 'DhlWsdlClass\\Lib\\getLabels',
      'ItemToPrintResponse' => 'DhlWsdlClass\\Lib\\ItemToPrintResponse',
      'ArrayOfItemtoprintresponse' => 'DhlWsdlClass\\Lib\\ArrayOfItemtoprintresponse',
      'getLabelsResponse' => 'DhlWsdlClass\\Lib\\getLabelsResponse',
      'PnpRequest' => 'DhlWsdlClass\\Lib\\PnpRequest',
      'getPnp' => 'DhlWsdlClass\\Lib\\getPnp',
      'PnpResponse' => 'DhlWsdlClass\\Lib\\PnpResponse',
      'getPnpResponse' => 'DhlWsdlClass\\Lib\\getPnpResponse',
      'getShipmentScan' => 'DhlWsdlClass\\Lib\\getShipmentScan',
      'ScanToPrintResponse' => 'DhlWsdlClass\\Lib\\ScanToPrintResponse',
      'getShipmentScanResponse' => 'DhlWsdlClass\\Lib\\getShipmentScanResponse',
      'Billing' => 'DhlWsdlClass\\Lib\\Billing',
      'Service' => 'DhlWsdlClass\\Lib\\Service',
      'ArrayOfService' => 'DhlWsdlClass\\Lib\\ArrayOfService',
      'ShipmentTime' => 'DhlWsdlClass\\Lib\\ShipmentTime',
      'ShipmentInfo' => 'DhlWsdlClass\\Lib\\ShipmentInfo',
      'PreavisoContact' => 'DhlWsdlClass\\Lib\\PreavisoContact',
      'Address' => 'DhlWsdlClass\\Lib\\Address',
      'Addressat' => 'DhlWsdlClass\\Lib\\Addressat',
      'ReceiverAddress' => 'DhlWsdlClass\\Lib\\ReceiverAddress',
      'ReceiverAddressat' => 'DhlWsdlClass\\Lib\\ReceiverAddressat',
      'Ship' => 'DhlWsdlClass\\Lib\\Ship',
      'Package' => 'DhlWsdlClass\\Lib\\Package',
      'ArrayOfPackage' => 'DhlWsdlClass\\Lib\\ArrayOfPackage',
      'CreateShipmentRequest' => 'DhlWsdlClass\\Lib\\CreateShipmentRequest',
      'createShipment' => 'DhlWsdlClass\\Lib\\createShipment',
      'Label' => 'DhlWsdlClass\\Lib\\Label',
      'CreateShipmentResponse' => 'DhlWsdlClass\\Lib\\CreateShipmentResponse',
      'createShipmentResponse' => 'DhlWsdlClass\\Lib\\createShipmentResponse',
      'DeleteShipmentRequest' => 'DhlWsdlClass\\Lib\\DeleteShipmentRequest',
      'deleteShipment' => 'DhlWsdlClass\\Lib\\deleteShipment',
      'DeleteShipmentResponse' => 'DhlWsdlClass\\Lib\\DeleteShipmentResponse',
      'deleteShipmentResponse' => 'DhlWsdlClass\\Lib\\deleteShipmentResponse',
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
