<?php


 function autoload_d15d31bba5c1b8b610ea170b94c65fa4($class)
{
    $classes = array(
        'DhlWsdlClass\DHL24WebapiService' => __DIR__ .'/DHL24WebapiService.php',
        'DhlWsdlClass\getVersion' => __DIR__ .'/getVersion.php',
        'DhlWsdlClass\getVersionResponse' => __DIR__ .'/getVersionResponse.php',
        'DhlWsdlClass\AuthData' => __DIR__ .'/AuthData.php',
        'DhlWsdlClass\AddressData' => __DIR__ .'/AddressData.php',
        'DhlWsdlClass\ReceiverAddressData' => __DIR__ .'/ReceiverAddressData.php',
        'DhlWsdlClass\NeighbourAddress' => __DIR__ .'/NeighbourAddress.php',
        'DhlWsdlClass\PieceDefinition' => __DIR__ .'/PieceDefinition.php',
        'DhlWsdlClass\ArrayOfPiecedefinition' => __DIR__ .'/ArrayOfPiecedefinition.php',
        'DhlWsdlClass\PaymentData' => __DIR__ .'/PaymentData.php',
        'DhlWsdlClass\ServiceDefinition' => __DIR__ .'/ServiceDefinition.php',
        'DhlWsdlClass\ShipmentFullData' => __DIR__ .'/ShipmentFullData.php',
        'DhlWsdlClass\ArrayOfShipmentfulldata' => __DIR__ .'/ArrayOfShipmentfulldata.php',
        'DhlWsdlClass\createShipments' => __DIR__ .'/createShipments.php',
        'DhlWsdlClass\ShipmentBasicData' => __DIR__ .'/ShipmentBasicData.php',
        'DhlWsdlClass\ArrayOfShipmentbasicdata' => __DIR__ .'/ArrayOfShipmentbasicdata.php',
        'DhlWsdlClass\createShipmentsResponse' => __DIR__ .'/createShipmentsResponse.php',
        'DhlWsdlClass\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'DhlWsdlClass\deleteShipments' => __DIR__ .'/deleteShipments.php',
        'DhlWsdlClass\DeleteNotification' => __DIR__ .'/DeleteNotification.php',
        'DhlWsdlClass\ArrayOfDeletenotification' => __DIR__ .'/ArrayOfDeletenotification.php',
        'DhlWsdlClass\deleteShipmentsResponse' => __DIR__ .'/deleteShipmentsResponse.php',
        'DhlWsdlClass\getMyShipments' => __DIR__ .'/getMyShipments.php',
        'DhlWsdlClass\getMyShipmentsResponse' => __DIR__ .'/getMyShipmentsResponse.php',
        'DhlWsdlClass\getMyShipmentsCount' => __DIR__ .'/getMyShipmentsCount.php',
        'DhlWsdlClass\getMyShipmentsCountResponse' => __DIR__ .'/getMyShipmentsCountResponse.php',
        'DhlWsdlClass\getPostalCodeServices' => __DIR__ .'/getPostalCodeServices.php',
        'DhlWsdlClass\PostalCodeServicesResponse' => __DIR__ .'/PostalCodeServicesResponse.php',
        'DhlWsdlClass\getPostalCodeServicesResponse' => __DIR__ .'/getPostalCodeServicesResponse.php',
        'DhlWsdlClass\getTrackAndTraceInfo' => __DIR__ .'/getTrackAndTraceInfo.php',
        'DhlWsdlClass\TrackAndTraceEvent' => __DIR__ .'/TrackAndTraceEvent.php',
        'DhlWsdlClass\ArrayOfTrackandtraceevent' => __DIR__ .'/ArrayOfTrackandtraceevent.php',
        'DhlWsdlClass\TrackAndTraceResponse' => __DIR__ .'/TrackAndTraceResponse.php',
        'DhlWsdlClass\getTrackAndTraceInfoResponse' => __DIR__ .'/getTrackAndTraceInfoResponse.php',
        'DhlWsdlClass\ShipmentOrderInfo' => __DIR__ .'/ShipmentOrderInfo.php',
        'DhlWsdlClass\bookCourier' => __DIR__ .'/bookCourier.php',
        'DhlWsdlClass\bookCourierResponse' => __DIR__ .'/bookCourierResponse.php',
        'DhlWsdlClass\cancelCourierBooking' => __DIR__ .'/cancelCourierBooking.php',
        'DhlWsdlClass\cancelCourierBookingResponse' => __DIR__ .'/cancelCourierBookingResponse.php',
        'DhlWsdlClass\ItemToPrint' => __DIR__ .'/ItemToPrint.php',
        'DhlWsdlClass\ArrayOfItemtoprint' => __DIR__ .'/ArrayOfItemtoprint.php',
        'DhlWsdlClass\getLabels' => __DIR__ .'/getLabels.php',
        'DhlWsdlClass\ItemToPrintResponse' => __DIR__ .'/ItemToPrintResponse.php',
        'DhlWsdlClass\ArrayOfItemtoprintresponse' => __DIR__ .'/ArrayOfItemtoprintresponse.php',
        'DhlWsdlClass\getLabelsResponse' => __DIR__ .'/getLabelsResponse.php',
        'DhlWsdlClass\PnpRequest' => __DIR__ .'/PnpRequest.php',
        'DhlWsdlClass\getPnp' => __DIR__ .'/getPnp.php',
        'DhlWsdlClass\PnpResponse' => __DIR__ .'/PnpResponse.php',
        'DhlWsdlClass\getPnpResponse' => __DIR__ .'/getPnpResponse.php',
        'DhlWsdlClass\getShipmentScan' => __DIR__ .'/getShipmentScan.php',
        'DhlWsdlClass\ScanToPrintResponse' => __DIR__ .'/ScanToPrintResponse.php',
        'DhlWsdlClass\getShipmentScanResponse' => __DIR__ .'/getShipmentScanResponse.php',
        'DhlWsdlClass\Billing' => __DIR__ .'/Billing.php',
        'DhlWsdlClass\Service' => __DIR__ .'/Service.php',
        'DhlWsdlClass\ArrayOfService' => __DIR__ .'/ArrayOfService.php',
        'DhlWsdlClass\ShipmentTime' => __DIR__ .'/ShipmentTime.php',
        'DhlWsdlClass\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'DhlWsdlClass\PreavisoContact' => __DIR__ .'/PreavisoContact.php',
        'DhlWsdlClass\Address' => __DIR__ .'/Address.php',
        'DhlWsdlClass\Addressat' => __DIR__ .'/Addressat.php',
        'DhlWsdlClass\ReceiverAddress' => __DIR__ .'/ReceiverAddress.php',
        'DhlWsdlClass\ReceiverAddressat' => __DIR__ .'/ReceiverAddressat.php',
        'DhlWsdlClass\Ship' => __DIR__ .'/Ship.php',
        'DhlWsdlClass\Package' => __DIR__ .'/Package.php',
        'DhlWsdlClass\ArrayOfPackage' => __DIR__ .'/ArrayOfPackage.php',
        'DhlWsdlClass\CreateShipmentRequest' => __DIR__ .'/CreateShipmentRequest.php',
        'DhlWsdlClass\createShipment' => __DIR__ .'/createShipment.php',
        'DhlWsdlClass\Label' => __DIR__ .'/Label.php',
        'DhlWsdlClass\CreateShipmentResponse' => __DIR__ .'/CreateShipmentResponse.php',
        'DhlWsdlClass\createShipmentResponse' => __DIR__ .'/createShipmentResponse.php',
        'DhlWsdlClass\DeleteShipmentRequest' => __DIR__ .'/DeleteShipmentRequest.php',
        'DhlWsdlClass\deleteShipment' => __DIR__ .'/deleteShipment.php',
        'DhlWsdlClass\DeleteShipmentResponse' => __DIR__ .'/DeleteShipmentResponse.php',
        'DhlWsdlClass\deleteShipmentResponse' => __DIR__ .'/deleteShipmentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d15d31bba5c1b8b610ea170b94c65fa4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
