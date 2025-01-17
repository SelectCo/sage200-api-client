<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultSingleObjectTestPath();

use Selectco\SageApi\DataObjects\POPPurchaseOrders\PurchaseOrder;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders\GetPurchaseOrder;
use Selectco\SageApi\Sage200Connector;

test('connector', function () {
    $connector = new Sage200Connector(
        developerSubscriptionKey: getDeveloperSubscriptionKey(),
        bearerToken: getBearerToken()
    );
    $response = $connector->send(new GetSites());

    expect($response->status())->toEqual(200);
});

/**
 * TEST REQUEST WITH ID AND MULTIPLE RESULTS
 */
test('Request Class', function () {
    expect(true)->toBeTrue();
    return new GetPurchaseOrder(getPurchaseOrderId());
})->depends('connector');

test('Data Object', function () {
    expect(true)->toBeTrue();
    return PurchaseOrder::class;
});

test('Key Array', function () {
    expect(true)->toBeTrue();
    return ['id', 'document_no'];
});