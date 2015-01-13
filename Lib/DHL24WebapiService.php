<?php

namespace DhlWsdlClass;

class DHL24WebapiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getVersion' => 'DhlWsdlClass\\getVersion',
      'getVersionResponse' => 'DhlWsdlClass\\getVersionResponse',
      'AuthData' => 'DhlWsdlClass\\AuthData',
      'AddressData' => 'DhlWsdlClass\\AddressData',
      'ReceiverAddressData' => 'DhlWsdlClass\\ReceiverAddressData',
      'NeighbourAddress' => 'DhlWsdlClass\\NeighbourAddress',
      'PieceDefinition' => 'DhlWsdlClass\\PieceDefinition',
      'ArrayOfPiecedefinition' => 'DhlWsdlClass\\ArrayOfPiecedefinition',
      'PaymentData' => 'DhlWsdlClass\\PaymentData',
      'ServiceDefinition' => 'DhlWsdlClass\\ServiceDefinition',
      'ShipmentFullData' => 'DhlWsdlClass\\ShipmentFullData',
      'ArrayOfShipmentfulldata' => 'DhlWsdlClass\\ArrayOfShipmentfulldata',
      'createShipments' => 'DhlWsdlClass\\createShipments',
      'ShipmentBasicData' => 'DhlWsdlClass\\ShipmentBasicData',
      'ArrayOfShipmentbasicdata' => 'DhlWsdlClass\\ArrayOfShipmentbasicdata',
      'createShipmentsResponse' => 'DhlWsdlClass\\createShipmentsResponse',
      'ArrayOfString' => 'DhlWsdlClass\\ArrayOfString',
      'deleteShipments' => 'DhlWsdlClass\\deleteShipments',
      'DeleteNotification' => 'DhlWsdlClass\\DeleteNotification',
      'ArrayOfDeletenotification' => 'DhlWsdlClass\\ArrayOfDeletenotification',
      'deleteShipmentsResponse' => 'DhlWsdlClass\\deleteShipmentsResponse',
      'getMyShipments' => 'DhlWsdlClass\\getMyShipments',
      'getMyShipmentsResponse' => 'DhlWsdlClass\\getMyShipmentsResponse',
      'getMyShipmentsCount' => 'DhlWsdlClass\\getMyShipmentsCount',
      'getMyShipmentsCountResponse' => 'DhlWsdlClass\\getMyShipmentsCountResponse',
      'getPostalCodeServices' => 'DhlWsdlClass\\getPostalCodeServices',
      'PostalCodeServicesResponse' => 'DhlWsdlClass\\PostalCodeServicesResponse',
      'getPostalCodeServicesResponse' => 'DhlWsdlClass\\getPostalCodeServicesResponse',
      'getTrackAndTraceInfo' => 'DhlWsdlClass\\getTrackAndTraceInfo',
      'TrackAndTraceEvent' => 'DhlWsdlClass\\TrackAndTraceEvent',
      'ArrayOfTrackandtraceevent' => 'DhlWsdlClass\\ArrayOfTrackandtraceevent',
      'TrackAndTraceResponse' => 'DhlWsdlClass\\TrackAndTraceResponse',
      'getTrackAndTraceInfoResponse' => 'DhlWsdlClass\\getTrackAndTraceInfoResponse',
      'ShipmentOrderInfo' => 'DhlWsdlClass\\ShipmentOrderInfo',
      'bookCourier' => 'DhlWsdlClass\\bookCourier',
      'bookCourierResponse' => 'DhlWsdlClass\\bookCourierResponse',
      'cancelCourierBooking' => 'DhlWsdlClass\\cancelCourierBooking',
      'cancelCourierBookingResponse' => 'DhlWsdlClass\\cancelCourierBookingResponse',
      'ItemToPrint' => 'DhlWsdlClass\\ItemToPrint',
      'ArrayOfItemtoprint' => 'DhlWsdlClass\\ArrayOfItemtoprint',
      'getLabels' => 'DhlWsdlClass\\getLabels',
      'ItemToPrintResponse' => 'DhlWsdlClass\\ItemToPrintResponse',
      'ArrayOfItemtoprintresponse' => 'DhlWsdlClass\\ArrayOfItemtoprintresponse',
      'getLabelsResponse' => 'DhlWsdlClass\\getLabelsResponse',
      'PnpRequest' => 'DhlWsdlClass\\PnpRequest',
      'getPnp' => 'DhlWsdlClass\\getPnp',
      'PnpResponse' => 'DhlWsdlClass\\PnpResponse',
      'getPnpResponse' => 'DhlWsdlClass\\getPnpResponse',
      'getShipmentScan' => 'DhlWsdlClass\\getShipmentScan',
      'ScanToPrintResponse' => 'DhlWsdlClass\\ScanToPrintResponse',
      'getShipmentScanResponse' => 'DhlWsdlClass\\getShipmentScanResponse',
      'Billing' => 'DhlWsdlClass\\Billing',
      'Service' => 'DhlWsdlClass\\Service',
      'ArrayOfService' => 'DhlWsdlClass\\ArrayOfService',
      'ShipmentTime' => 'DhlWsdlClass\\ShipmentTime',
      'ShipmentInfo' => 'DhlWsdlClass\\ShipmentInfo',
      'PreavisoContact' => 'DhlWsdlClass\\PreavisoContact',
      'Address' => 'DhlWsdlClass\\Address',
      'Addressat' => 'DhlWsdlClass\\Addressat',
      'ReceiverAddress' => 'DhlWsdlClass\\ReceiverAddress',
      'ReceiverAddressat' => 'DhlWsdlClass\\ReceiverAddressat',
      'Ship' => 'DhlWsdlClass\\Ship',
      'Package' => 'DhlWsdlClass\\Package',
      'ArrayOfPackage' => 'DhlWsdlClass\\ArrayOfPackage',
      'CreateShipmentRequest' => 'DhlWsdlClass\\CreateShipmentRequest',
      'createShipment' => 'DhlWsdlClass\\createShipment',
      'Label' => 'DhlWsdlClass\\Label',
      'CreateShipmentResponse' => 'DhlWsdlClass\\CreateShipmentResponse',
      'createShipmentResponse' => 'DhlWsdlClass\\createShipmentResponse',
      'DeleteShipmentRequest' => 'DhlWsdlClass\\DeleteShipmentRequest',
      'deleteShipment' => 'DhlWsdlClass\\deleteShipment',
      'DeleteShipmentResponse' => 'DhlWsdlClass\\DeleteShipmentResponse',
      'deleteShipmentResponse' => 'DhlWsdlClass\\deleteShipmentResponse',
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
