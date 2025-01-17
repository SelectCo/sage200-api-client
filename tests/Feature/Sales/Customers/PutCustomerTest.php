<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultPUTSingleObjectTestPath();

use Selectco\SageApi\DataObjects\Sales\Customer;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Sales\Customers\DelCustomer;
use Selectco\SageApi\Requests\Sales\Customers\PostCustomers;
use Selectco\SageApi\Requests\Sales\Customers\PutCustomer;
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
    return getCustomerData();
});

test('POST Request', function () {
    expect(true)->toBeTrue();
    return PostCustomers::class;
});

test('PUT Request', function () {
    expect(true)->toBeTrue();
    return PutCustomer::class;
});

test('DEL Request', function () {
    expect(true)->toBeTrue();
    return DelCustomer::class;
});

test('Data Object', function () {
    expect(true)->toBeTrue();
    return Customer::class;
});

test('Bad Data', function () {
    expect(true)->toBeTrue();
    return getBadCustomerData();
});