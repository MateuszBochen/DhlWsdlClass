<?php
/**
 * File for the class which returns the class map definition
 * @package DhlWsdlClass
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * Class which returns the class map definition by the static method DhlWsdlClassClassMap::classMap()
 * @package DhlWsdlClass
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'Address' => 'DhlWsdlClassStructAddress',
  'AddressData' => 'DhlWsdlClassStructAddressData',
  'Addressat' => 'DhlWsdlClassStructAddressat',
  'ArrayOfDeletenotification' => 'DhlWsdlClassStructArrayOfDeletenotification',
  'ArrayOfItemtoprint' => 'DhlWsdlClassStructArrayOfItemtoprint',
  'ArrayOfItemtoprintresponse' => 'DhlWsdlClassStructArrayOfItemtoprintresponse',
  'ArrayOfPackage' => 'DhlWsdlClassStructArrayOfPackage',
  'ArrayOfPiecedefinition' => 'DhlWsdlClassStructArrayOfPiecedefinition',
  'ArrayOfService' => 'DhlWsdlClassStructArrayOfService',
  'ArrayOfShipmentbasicdata' => 'DhlWsdlClassStructArrayOfShipmentbasicdata',
  'ArrayOfShipmentfulldata' => 'DhlWsdlClassStructArrayOfShipmentfulldata',
  'ArrayOfString' => 'DhlWsdlClassStructArrayOfString',
  'ArrayOfTrackandtraceevent' => 'DhlWsdlClassStructArrayOfTrackandtraceevent',
  'AuthData' => 'DhlWsdlClassStructAuthData',
  'Billing' => 'DhlWsdlClassStructBilling',
  'CreateShipmentRequest' => 'DhlWsdlClassStructCreateShipmentRequest',
  'CreateShipmentResponse' => 'DhlWsdlClassStructCreateShipmentResponse_1',
  'DeleteNotification' => 'DhlWsdlClassStructDeleteNotification',
  'DeleteShipmentRequest' => 'DhlWsdlClassStructDeleteShipmentRequest',
  'DeleteShipmentResponse' => 'DhlWsdlClassStructDeleteShipmentResponse_1',
  'ItemToPrint' => 'DhlWsdlClassStructItemToPrint',
  'ItemToPrintResponse' => 'DhlWsdlClassStructItemToPrintResponse',
  'Label' => 'DhlWsdlClassStructLabel',
  'NeighbourAddress' => 'DhlWsdlClassStructNeighbourAddress',
  'Package' => 'DhlWsdlClassStructPackage',
  'PaymentData' => 'DhlWsdlClassStructPaymentData',
  'PieceDefinition' => 'DhlWsdlClassStructPieceDefinition',
  'PnpRequest' => 'DhlWsdlClassStructPnpRequest',
  'PnpResponse' => 'DhlWsdlClassStructPnpResponse',
  'PostalCodeServicesResponse' => 'DhlWsdlClassStructPostalCodeServicesResponse',
  'PreavisoContact' => 'DhlWsdlClassStructPreavisoContact',
  'ReceiverAddress' => 'DhlWsdlClassStructReceiverAddress',
  'ReceiverAddressData' => 'DhlWsdlClassStructReceiverAddressData',
  'ReceiverAddressat' => 'DhlWsdlClassStructReceiverAddressat',
  'ScanToPrintResponse' => 'DhlWsdlClassStructScanToPrintResponse',
  'Service' => 'DhlWsdlClassStructService',
  'ServiceDefinition' => 'DhlWsdlClassStructServiceDefinition',
  'Ship' => 'DhlWsdlClassStructShip',
  'ShipmentBasicData' => 'DhlWsdlClassStructShipmentBasicData',
  'ShipmentFullData' => 'DhlWsdlClassStructShipmentFullData',
  'ShipmentInfo' => 'DhlWsdlClassStructShipmentInfo',
  'ShipmentOrderInfo' => 'DhlWsdlClassStructShipmentOrderInfo',
  'ShipmentTime' => 'DhlWsdlClassStructShipmentTime',
  'TrackAndTraceEvent' => 'DhlWsdlClassStructTrackAndTraceEvent',
  'TrackAndTraceResponse' => 'DhlWsdlClassStructTrackAndTraceResponse',
  'bookCourier' => 'DhlWsdlClassStructBookCourier',
  'bookCourierResponse' => 'DhlWsdlClassStructBookCourierResponse',
  'cancelCourierBooking' => 'DhlWsdlClassStructCancelCourierBooking',
  'cancelCourierBookingResponse' => 'DhlWsdlClassStructCancelCourierBookingResponse',
  'createShipment' => 'DhlWsdlClassStructCreateShipment',
  'createShipmentResponse' => 'DhlWsdlClassStructCreateShipmentResponse',
  'createShipments' => 'DhlWsdlClassStructCreateShipments',
  'createShipmentsResponse' => 'DhlWsdlClassStructCreateShipmentsResponse',
  'deleteShipment' => 'DhlWsdlClassStructDeleteShipment',
  'deleteShipmentResponse' => 'DhlWsdlClassStructDeleteShipmentResponse',
  'deleteShipments' => 'DhlWsdlClassStructDeleteShipments',
  'deleteShipmentsResponse' => 'DhlWsdlClassStructDeleteShipmentsResponse',
  'getLabels' => 'DhlWsdlClassStructGetLabels',
  'getLabelsResponse' => 'DhlWsdlClassStructGetLabelsResponse',
  'getMyShipments' => 'DhlWsdlClassStructGetMyShipments',
  'getMyShipmentsCount' => 'DhlWsdlClassStructGetMyShipmentsCount',
  'getMyShipmentsCountResponse' => 'DhlWsdlClassStructGetMyShipmentsCountResponse',
  'getMyShipmentsResponse' => 'DhlWsdlClassStructGetMyShipmentsResponse',
  'getPnp' => 'DhlWsdlClassStructGetPnp',
  'getPnpResponse' => 'DhlWsdlClassStructGetPnpResponse',
  'getPostalCodeServices' => 'DhlWsdlClassStructGetPostalCodeServices',
  'getPostalCodeServicesResponse' => 'DhlWsdlClassStructGetPostalCodeServicesResponse',
  'getShipmentScan' => 'DhlWsdlClassStructGetShipmentScan',
  'getShipmentScanResponse' => 'DhlWsdlClassStructGetShipmentScanResponse',
  'getTrackAndTraceInfo' => 'DhlWsdlClassStructGetTrackAndTraceInfo',
  'getTrackAndTraceInfoResponse' => 'DhlWsdlClassStructGetTrackAndTraceInfoResponse',
  'getVersion' => 'DhlWsdlClassStructGetVersion',
  'getVersionResponse' => 'DhlWsdlClassStructGetVersionResponse',
);
    }
}
