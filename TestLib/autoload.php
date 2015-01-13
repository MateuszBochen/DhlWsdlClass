<?php


 function autoload_5a3c64df826fdbce8869364567b1e376($class)
{
    $classes = array(
        'DhlWsdlClass\TestLib\DHL24WebapiService' => __DIR__ .'/DHL24WebapiService.php',
        'DhlWsdlClass\TestLib\getVersion' => __DIR__ .'/getVersion.php',
        'DhlWsdlClass\TestLib\getVersionResponse' => __DIR__ .'/getVersionResponse.php',
        'DhlWsdlClass\TestLib\AuthData' => __DIR__ .'/AuthData.php',
        'DhlWsdlClass\TestLib\AddressData' => __DIR__ .'/AddressData.php',
        'DhlWsdlClass\TestLib\ReceiverAddressData' => __DIR__ .'/ReceiverAddressData.php',
        'DhlWsdlClass\TestLib\NeighbourAddress' => __DIR__ .'/NeighbourAddress.php',
        'DhlWsdlClass\TestLib\PieceDefinition' => __DIR__ .'/PieceDefinition.php',
        'DhlWsdlClass\TestLib\ArrayOfPiecedefinition' => __DIR__ .'/ArrayOfPiecedefinition.php',
        'DhlWsdlClass\TestLib\PaymentData' => __DIR__ .'/PaymentData.php',
        'DhlWsdlClass\TestLib\ServiceDefinition' => __DIR__ .'/ServiceDefinition.php',
        'DhlWsdlClass\TestLib\ShipmentFullData' => __DIR__ .'/ShipmentFullData.php',
        'DhlWsdlClass\TestLib\ArrayOfShipmentfulldata' => __DIR__ .'/ArrayOfShipmentfulldata.php',
        'DhlWsdlClass\TestLib\createShipments' => __DIR__ .'/createShipments.php',
        'DhlWsdlClass\TestLib\ShipmentBasicData' => __DIR__ .'/ShipmentBasicData.php',
        'DhlWsdlClass\TestLib\ArrayOfShipmentbasicdata' => __DIR__ .'/ArrayOfShipmentbasicdata.php',
        'DhlWsdlClass\TestLib\createShipmentsResponse' => __DIR__ .'/createShipmentsResponse.php',
        'DhlWsdlClass\TestLib\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'DhlWsdlClass\TestLib\deleteShipments' => __DIR__ .'/deleteShipments.php',
        'DhlWsdlClass\TestLib\DeleteNotification' => __DIR__ .'/DeleteNotification.php',
        'DhlWsdlClass\TestLib\ArrayOfDeletenotification' => __DIR__ .'/ArrayOfDeletenotification.php',
        'DhlWsdlClass\TestLib\deleteShipmentsResponse' => __DIR__ .'/deleteShipmentsResponse.php',
        'DhlWsdlClass\TestLib\getMyShipments' => __DIR__ .'/getMyShipments.php',
        'DhlWsdlClass\TestLib\getMyShipmentsResponse' => __DIR__ .'/getMyShipmentsResponse.php',
        'DhlWsdlClass\TestLib\getMyShipmentsCount' => __DIR__ .'/getMyShipmentsCount.php',
        'DhlWsdlClass\TestLib\getMyShipmentsCountResponse' => __DIR__ .'/getMyShipmentsCountResponse.php',
        'DhlWsdlClass\TestLib\getPostalCodeServices' => __DIR__ .'/getPostalCodeServices.php',
        'DhlWsdlClass\TestLib\PostalCodeServicesResponse' => __DIR__ .'/PostalCodeServicesResponse.php',
        'DhlWsdlClass\TestLib\getPostalCodeServicesResponse' => __DIR__ .'/getPostalCodeServicesResponse.php',
        'DhlWsdlClass\TestLib\getTrackAndTraceInfo' => __DIR__ .'/getTrackAndTraceInfo.php',
        'DhlWsdlClass\TestLib\TrackAndTraceEvent' => __DIR__ .'/TrackAndTraceEvent.php',
        'DhlWsdlClass\TestLib\ArrayOfTrackandtraceevent' => __DIR__ .'/ArrayOfTrackandtraceevent.php',
        'DhlWsdlClass\TestLib\TrackAndTraceResponse' => __DIR__ .'/TrackAndTraceResponse.php',
        'DhlWsdlClass\TestLib\getTrackAndTraceInfoResponse' => __DIR__ .'/getTrackAndTraceInfoResponse.php',
        'DhlWsdlClass\TestLib\ShipmentOrderInfo' => __DIR__ .'/ShipmentOrderInfo.php',
        'DhlWsdlClass\TestLib\bookCourier' => __DIR__ .'/bookCourier.php',
        'DhlWsdlClass\TestLib\bookCourierResponse' => __DIR__ .'/bookCourierResponse.php',
        'DhlWsdlClass\TestLib\cancelCourierBooking' => __DIR__ .'/cancelCourierBooking.php',
        'DhlWsdlClass\TestLib\cancelCourierBookingResponse' => __DIR__ .'/cancelCourierBookingResponse.php',
        'DhlWsdlClass\TestLib\ItemToPrint' => __DIR__ .'/ItemToPrint.php',
        'DhlWsdlClass\TestLib\ArrayOfItemtoprint' => __DIR__ .'/ArrayOfItemtoprint.php',
        'DhlWsdlClass\TestLib\getLabels' => __DIR__ .'/getLabels.php',
        'DhlWsdlClass\TestLib\ItemToPrintResponse' => __DIR__ .'/ItemToPrintResponse.php',
        'DhlWsdlClass\TestLib\ArrayOfItemtoprintresponse' => __DIR__ .'/ArrayOfItemtoprintresponse.php',
        'DhlWsdlClass\TestLib\getLabelsResponse' => __DIR__ .'/getLabelsResponse.php',
        'DhlWsdlClass\TestLib\PnpRequest' => __DIR__ .'/PnpRequest.php',
        'DhlWsdlClass\TestLib\getPnp' => __DIR__ .'/getPnp.php',
        'DhlWsdlClass\TestLib\PnpResponse' => __DIR__ .'/PnpResponse.php',
        'DhlWsdlClass\TestLib\getPnpResponse' => __DIR__ .'/getPnpResponse.php',
        'DhlWsdlClass\TestLib\getShipmentScan' => __DIR__ .'/getShipmentScan.php',
        'DhlWsdlClass\TestLib\ScanToPrintResponse' => __DIR__ .'/ScanToPrintResponse.php',
        'DhlWsdlClass\TestLib\getShipmentScanResponse' => __DIR__ .'/getShipmentScanResponse.php',
        'DhlWsdlClass\TestLib\Billing' => __DIR__ .'/Billing.php',
        'DhlWsdlClass\TestLib\Service' => __DIR__ .'/Service.php',
        'DhlWsdlClass\TestLib\ArrayOfService' => __DIR__ .'/ArrayOfService.php',
        'DhlWsdlClass\TestLib\ShipmentTime' => __DIR__ .'/ShipmentTime.php',
        'DhlWsdlClass\TestLib\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'DhlWsdlClass\TestLib\PreavisoContact' => __DIR__ .'/PreavisoContact.php',
        'DhlWsdlClass\TestLib\Address' => __DIR__ .'/Address.php',
        'DhlWsdlClass\TestLib\Addressat' => __DIR__ .'/Addressat.php',
        'DhlWsdlClass\TestLib\ReceiverAddress' => __DIR__ .'/ReceiverAddress.php',
        'DhlWsdlClass\TestLib\ReceiverAddressat' => __DIR__ .'/ReceiverAddressat.php',
        'DhlWsdlClass\TestLib\Ship' => __DIR__ .'/Ship.php',
        'DhlWsdlClass\TestLib\Package' => __DIR__ .'/Package.php',
        'DhlWsdlClass\TestLib\ArrayOfPackage' => __DIR__ .'/ArrayOfPackage.php',
        'DhlWsdlClass\TestLib\CreateShipmentRequest' => __DIR__ .'/CreateShipmentRequest.php',
        'DhlWsdlClass\TestLib\createShipment' => __DIR__ .'/createShipment.php',
        'DhlWsdlClass\TestLib\Label' => __DIR__ .'/Label.php',
        'DhlWsdlClass\TestLib\CreateShipmentResponse' => __DIR__ .'/CreateShipmentResponse.php',
        'DhlWsdlClass\TestLib\createShipmentResponse' => __DIR__ .'/createShipmentResponse.php',
        'DhlWsdlClass\TestLib\DeleteShipmentRequest' => __DIR__ .'/DeleteShipmentRequest.php',
        'DhlWsdlClass\TestLib\deleteShipment' => __DIR__ .'/deleteShipment.php',
        'DhlWsdlClass\TestLib\DeleteShipmentResponse' => __DIR__ .'/DeleteShipmentResponse.php',
        'DhlWsdlClass\TestLib\deleteShipmentResponse' => __DIR__ .'/deleteShipmentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5a3c64df826fdbce8869364567b1e376');

// Do nothing. The rest is just leftovers from the code generation.
{
}
