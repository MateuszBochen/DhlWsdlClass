<?php


 function autoload_795da20da02136fd755015b0ee1ccd11($class)
{
    $classes = array(
        'Lib\DHL24WebapiService' => __DIR__ .'/DHL24WebapiService.php',
        'Lib\getVersion' => __DIR__ .'/getVersion.php',
        'Lib\getVersionResponse' => __DIR__ .'/getVersionResponse.php',
        'Lib\AuthData' => __DIR__ .'/AuthData.php',
        'Lib\AddressData' => __DIR__ .'/AddressData.php',
        'Lib\ReceiverAddressData' => __DIR__ .'/ReceiverAddressData.php',
        'Lib\NeighbourAddress' => __DIR__ .'/NeighbourAddress.php',
        'Lib\PieceDefinition' => __DIR__ .'/PieceDefinition.php',
        'Lib\ArrayOfPiecedefinition' => __DIR__ .'/ArrayOfPiecedefinition.php',
        'Lib\PaymentData' => __DIR__ .'/PaymentData.php',
        'Lib\ServiceDefinition' => __DIR__ .'/ServiceDefinition.php',
        'Lib\ShipmentFullData' => __DIR__ .'/ShipmentFullData.php',
        'Lib\ArrayOfShipmentfulldata' => __DIR__ .'/ArrayOfShipmentfulldata.php',
        'Lib\createShipments' => __DIR__ .'/createShipments.php',
        'Lib\ShipmentBasicData' => __DIR__ .'/ShipmentBasicData.php',
        'Lib\ArrayOfShipmentbasicdata' => __DIR__ .'/ArrayOfShipmentbasicdata.php',
        'Lib\createShipmentsResponse' => __DIR__ .'/createShipmentsResponse.php',
        'Lib\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'Lib\deleteShipments' => __DIR__ .'/deleteShipments.php',
        'Lib\DeleteNotification' => __DIR__ .'/DeleteNotification.php',
        'Lib\ArrayOfDeletenotification' => __DIR__ .'/ArrayOfDeletenotification.php',
        'Lib\deleteShipmentsResponse' => __DIR__ .'/deleteShipmentsResponse.php',
        'Lib\getMyShipments' => __DIR__ .'/getMyShipments.php',
        'Lib\getMyShipmentsResponse' => __DIR__ .'/getMyShipmentsResponse.php',
        'Lib\getMyShipmentsCount' => __DIR__ .'/getMyShipmentsCount.php',
        'Lib\getMyShipmentsCountResponse' => __DIR__ .'/getMyShipmentsCountResponse.php',
        'Lib\getPostalCodeServices' => __DIR__ .'/getPostalCodeServices.php',
        'Lib\PostalCodeServicesResponse' => __DIR__ .'/PostalCodeServicesResponse.php',
        'Lib\getPostalCodeServicesResponse' => __DIR__ .'/getPostalCodeServicesResponse.php',
        'Lib\getTrackAndTraceInfo' => __DIR__ .'/getTrackAndTraceInfo.php',
        'Lib\TrackAndTraceEvent' => __DIR__ .'/TrackAndTraceEvent.php',
        'Lib\ArrayOfTrackandtraceevent' => __DIR__ .'/ArrayOfTrackandtraceevent.php',
        'Lib\TrackAndTraceResponse' => __DIR__ .'/TrackAndTraceResponse.php',
        'Lib\getTrackAndTraceInfoResponse' => __DIR__ .'/getTrackAndTraceInfoResponse.php',
        'Lib\ShipmentOrderInfo' => __DIR__ .'/ShipmentOrderInfo.php',
        'Lib\bookCourier' => __DIR__ .'/bookCourier.php',
        'Lib\bookCourierResponse' => __DIR__ .'/bookCourierResponse.php',
        'Lib\cancelCourierBooking' => __DIR__ .'/cancelCourierBooking.php',
        'Lib\cancelCourierBookingResponse' => __DIR__ .'/cancelCourierBookingResponse.php',
        'Lib\ItemToPrint' => __DIR__ .'/ItemToPrint.php',
        'Lib\ArrayOfItemtoprint' => __DIR__ .'/ArrayOfItemtoprint.php',
        'Lib\getLabels' => __DIR__ .'/getLabels.php',
        'Lib\ItemToPrintResponse' => __DIR__ .'/ItemToPrintResponse.php',
        'Lib\ArrayOfItemtoprintresponse' => __DIR__ .'/ArrayOfItemtoprintresponse.php',
        'Lib\getLabelsResponse' => __DIR__ .'/getLabelsResponse.php',
        'Lib\PnpRequest' => __DIR__ .'/PnpRequest.php',
        'Lib\getPnp' => __DIR__ .'/getPnp.php',
        'Lib\PnpResponse' => __DIR__ .'/PnpResponse.php',
        'Lib\getPnpResponse' => __DIR__ .'/getPnpResponse.php',
        'Lib\getShipmentScan' => __DIR__ .'/getShipmentScan.php',
        'Lib\ScanToPrintResponse' => __DIR__ .'/ScanToPrintResponse.php',
        'Lib\getShipmentScanResponse' => __DIR__ .'/getShipmentScanResponse.php',
        'Lib\Billing' => __DIR__ .'/Billing.php',
        'Lib\Service' => __DIR__ .'/Service.php',
        'Lib\ArrayOfService' => __DIR__ .'/ArrayOfService.php',
        'Lib\ShipmentTime' => __DIR__ .'/ShipmentTime.php',
        'Lib\ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'Lib\PreavisoContact' => __DIR__ .'/PreavisoContact.php',
        'Lib\Address' => __DIR__ .'/Address.php',
        'Lib\Addressat' => __DIR__ .'/Addressat.php',
        'Lib\ReceiverAddress' => __DIR__ .'/ReceiverAddress.php',
        'Lib\ReceiverAddressat' => __DIR__ .'/ReceiverAddressat.php',
        'Lib\Ship' => __DIR__ .'/Ship.php',
        'Lib\Package' => __DIR__ .'/Package.php',
        'Lib\ArrayOfPackage' => __DIR__ .'/ArrayOfPackage.php',
        'Lib\CreateShipmentRequest' => __DIR__ .'/CreateShipmentRequest.php',
        'Lib\createShipment' => __DIR__ .'/createShipment.php',
        'Lib\Label' => __DIR__ .'/Label.php',
        'Lib\CreateShipmentResponse' => __DIR__ .'/CreateShipmentResponse.php',
        'Lib\createShipmentResponse' => __DIR__ .'/createShipmentResponse.php',
        'Lib\DeleteShipmentRequest' => __DIR__ .'/DeleteShipmentRequest.php',
        'Lib\deleteShipment' => __DIR__ .'/deleteShipment.php',
        'Lib\DeleteShipmentResponse' => __DIR__ .'/DeleteShipmentResponse.php',
        'Lib\deleteShipmentResponse' => __DIR__ .'/deleteShipmentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_795da20da02136fd755015b0ee1ccd11');

// Do nothing. The rest is just leftovers from the code generation.
{
}
