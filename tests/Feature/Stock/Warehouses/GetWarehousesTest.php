<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultMultipleObjectTestPath();

use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouses;
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
test('id', function() {
    return 1;
})->depends('connector');

test('request', function () {
    return GetWarehouses::class;
});

test('object', function () {
    return Warehouse::class;
});