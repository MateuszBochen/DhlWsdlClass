<?php


 function autoload_8c90f7cbb3d7a8187a10eda6cf048007($class)
{
    $classes = array(
        'DhlWsdlClass\Lib\DHL24WebapiService' => __DIR__ .'/DHL24WebapiService.php',
        'DhlWsdlClass\Lib\getVersion' => __DIR__ .'/getVersion.php',
        'DhlWsdlClass\Lib\getVersionResponse' => __DIR__ .'/getVersionResponse.php',
        'DhlWsdlClass\Lib\AuthData' => __DIR__ .'/AuthData.php',
        'DhlWsdlClass\Lib\AddressData' => __DIR__ .'/AddressData.php',
        'DhlWsdlClass\Lib\ReceiverAddressData' => __DIR__ .'/ReceiverAddressData.php',
        'DhlWsdlClass\Lib\NeighbourAddress' => __DIR__ .'/NeighbourAddress.php',
        'DhlWsdlClass\Lib\PieceDefinition' => __DIR__ .'/PieceDefinition.php',
        'DhlWsdlClass\Lib\ArrayOfPiecedefinition' => __DIR__ .'/ArrayOfPiecedefinition.php',
        'DhlWsdlClass\Lib\PaymentData' => __DIR__ .'/PaymentData.php',
        'DhlWsdlClass\Lib\ServiceDefinition' => __DIR__ .'/ServiceDefinition.php',
        'DhlWsdlClass\Lib\ShipmentFullData' => __DIR__ .'/ShipmentFullData.php',
        'DhlWsdlClass\Lib\ArrayOfShipmentfulldata' => __DIR__ .'/ArrayOfShipmentfulldata.php',
        'DhlWsdlClass\Lib\createShipments' => __DIR__ .'/createShipments.php',
        'DhlWsdlClass\Lib\ShipmentBasicData' => __DIR__ .'/ShipmentBasicData.php',
        'DhlWsdlClass\Lib\ArrayOfShipmentbasicdata' => __DIR__ .'/ArrayOfShipmentbasicdata.php',
        'DhlWsdlClass\Lib\createShipmentsResponse' => __DIR__ .'/createShipmentsResponse.php',
        'DhlWsdlClass\Lib\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'DhlWsdlClass\Lib\deleteShipments' => __DIR__ .'/deleteShipments.php',
        'DhlWsdlClass\Lib\DeleteNotification' => __DIR__ .'/DeleteNotification.php',
        'DhlWsdlClass\Lib\ArrayOfDeletenotification' => __DIR__ .'/ArrayOfDeletenotification.php',
        'DhlWsdlClass\Lib\deleteShipmentsResponse' => __DIR__ .'/deleteShipmentsResponse.php',
        'DhlWsdlClass\Lib\getMyShipments' => __DIR__ .'/getMyShipments.php',
        'DhlWsdlClass\Lib\getMyShipmentsResponse' => __DIR__ .'/getMyShipmentsResponse.php',
        'DhlWsdlClass\Lib\getMyShipmentsCount' => __DIR__ .'/getMyShipmentsCount.php',
        'DhlWsdlClass\Lib\getMyShipmentsCountResponse' => __DIR__ .'/getMyShipmentsCountResponse.php',
        'DhlWsdlClass\Lib\getPostalCodeServices' => __DIR__ .'/getPostalCodeServices.php',
        'DhlWsdlClass\Lib\PostalCodeServicesResponse' => __DIR__ .'/PostalCodeServicesResponse.php',
        'DhlWsdlClass\Lib\getPostalCodeServicesResponse' => __DIR__ .'/getPostalCodeServicesResponse.php',
        'DhlWsdlClass\Lib\getTrackAndTraceInfo' => __DIR__ .'/getTrackAndTraceInfo.php',
        'DhlWsdlClass\Lib\TrackAndTraceEvent' => __DIR__ .'/TrackAndTraceEvent.php',
        'DhlWsdlClass\Lib\ArrayOfTrackandtraceevent' => __DIR__ .'/ArrayOfTrackandtraceevent.php',
        'DhlWsdlClass\Lib\TrackAndTraceResponse' => __DIR__ .'/TrackAndTraceResponse.php',
        'DhlWsdlClass\Lib\getTrackAndTraceInfoResponse' => __DIR__ .'/getTrackAndTraceInfoResponse.php',
        'DhlWsdlClass\Lib\ShipmentOrderInfo' => __DIR__ .'/ShipmentOrderInfo.php',
        'DhlWsdlClass\Lib\bookCourier' => __DIR__ .'/bookCourier.php',
        'DhlWsdlClass\Lib\bookCourierResponse' => __DIR__ .'/bookCourierResponse.php',
        'DhlWsdlClass\Lib\cancelCourierBooking' => __DIR__ .'/cancelCourierBooking.php',
        'DhlWsdlClass\Lib\cancelCourierBookingResponse' => __DIR__ .'/cancelCourierBookingResponse.php',
        'DhlWsdlClass\Lib\ItemToPrint' => __DIR__ .'/ItemToPrint.php',
        'DhlWsdlClass\Lib\ArrayOfItemtoprint' => __DIR__ .'/ArrayOfItemtoprint.php',
        'DhlWsdlClass\Lib\getLabels' => __DIR__ .'/getLabels.php',
        'DhlWsdlClass\Lib\ItemToPrintResponse' => __DIR__ .'/ItemToPrintResponse.php',
        'DhlWsdlClass\Lib\ArrayOfItemtoprintresponse' => __DIR__ .'/ArrayOfItemtoprintresponse.php',
        'DhlWsdlClass\Lib\getLabelsResponse' => __DIR__ .'/getLabelsResponse.php',
        'DhlWsdlClass\Lib\PnpRequest' => __DIR__ .'/PnpRequest.php',
        'DhlWsdlClass\Lib\getPnp' => __DIR__ .'/getPnp.php',
        'DhlWsdlClass\Lib\PnpResponse' => __DIR__ .'/PnpResponse.php',
        'DhlWsdlClass\Lib\getPnpResponse' => __DIR__ .'/getPnpResponse.php',
        'DhlWsdlClass\Lib\getShipmentScan' => __DIR__ .'/getShipmentScan.php',
        'DhlWsdlClass\Lib\ScanToPrintResponse' => __DIR__ .'/ScanToPrintResponse.php',
        'DhlWsdlClass\Lib\getShipmentScanResponse' => __DIR__ .'/getShipmentScanResponse.php',
        'DhlWsdlClass\Lib\Billing' => __DIR__ .'/Billing.php',
        'DhlWsdlClass\Lib\Service' => __DIR__ .'/Service.php',
        'DhlWsdlClass\Lib\ArrayOfService' => __DIR__ .'/ArrayOfService.php',
        'DhlWsdlClass\Lib\ShipmentTime' => __DIR__ .'/ShipmentTime.php',
        'DhlWsdlClass\Lib\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'DhlWsdlClass\Lib\PreavisoContact' => __DIR__ .'/PreavisoContact.php',
        'DhlWsdlClass\Lib\Address' => __DIR__ .'/Address.php',
        'DhlWsdlClass\Lib\Addressat' => __DIR__ .'/Addressat.php',
        'DhlWsdlClass\Lib\ReceiverAddress' => __DIR__ .'/ReceiverAddress.php',
        'DhlWsdlClass\Lib\ReceiverAddressat' => __DIR__ .'/ReceiverAddressat.php',
        'DhlWsdlClass\Lib\Ship' => __DIR__ .'/Ship.php',
        'DhlWsdlClass\Lib\Package' => __DIR__ .'/Package.php',
        'DhlWsdlClass\Lib\ArrayOfPackage' => __DIR__ .'/ArrayOfPackage.php',
        'DhlWsdlClass\Lib\CreateShipmentRequest' => __DIR__ .'/CreateShipmentRequest.php',
        'DhlWsdlClass\Lib\createShipment' => __DIR__ .'/createShipment.php',
        'DhlWsdlClass\Lib\Label' => __DIR__ .'/Label.php',
        'DhlWsdlClass\Lib\CreateShipmentResponse' => __DIR__ .'/CreateShipmentResponse.php',
        'DhlWsdlClass\Lib\createShipmentResponse' => __DIR__ .'/createShipmentResponse.php',
        'DhlWsdlClass\Lib\DeleteShipmentRequest' => __DIR__ .'/DeleteShipmentRequest.php',
        'DhlWsdlClass\Lib\deleteShipment' => __DIR__ .'/deleteShipment.php',
        'DhlWsdlClass\Lib\DeleteShipmentResponse' => __DIR__ .'/DeleteShipmentResponse.php',
        'DhlWsdlClass\Lib\deleteShipmentResponse' => __DIR__ .'/deleteShipmentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_8c90f7cbb3d7a8187a10eda6cf048007');

// Do nothing. The rest is just leftovers from the code generation.
{
}
