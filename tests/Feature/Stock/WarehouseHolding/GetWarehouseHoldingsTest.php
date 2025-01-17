<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultMultipleObjectTestPath();

use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Stock\WarehouseHolding\GetWarehouseHoldings;
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
    return new GetWarehouseHoldings();
})->depends('connector');

test('Data Object', function () {
    expect(true)->toBeTrue();
    return WarehouseHolding::class;
});

test('ID Key', function() {
    expect(true)->toBeTrue();
    return 'id';
});

test('Key Array', function () {
    expect(true)->toBeTrue();
    return ['id', 'warehouse_id'];
});