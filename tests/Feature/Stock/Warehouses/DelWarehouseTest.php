<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultDELSingleObjectTestPath();

use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Stock\Warehouses\DelWarehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\PostWarehouses;
use Selectco\SageApi\Requests\Stock\Warehouses\PutWarehouse;
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
test('ID Key', function() {
    expect(true)->toBeTrue();
    return 'id';
})->depends('connector');

test('Good Data', function () {
    expect(true)->toBeTrue();
    return getWarehouseData();
});

test('POST Request', function () {
    expect(true)->toBeTrue();
    return PostWarehouses::class;
});

test('DEL Request', function () {
    expect(true)->toBeTrue();
    return DelWarehouse::class;
});

test('Data Object', function () {
    expect(true)->toBeTrue();
    return Warehouse::class;
});