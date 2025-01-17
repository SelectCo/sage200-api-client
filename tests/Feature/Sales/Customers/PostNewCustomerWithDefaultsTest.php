<?php
declare(strict_types=1);

use Selectco\SageApi\DataObjects\Sales\Customer;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Sales\Customers\DelCustomer;
use Selectco\SageApi\Requests\Sales\Customers\PostNewCustomerWithDefaults;
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
    return PostNewCustomerWithDefaults::class;
});

test('Data Object', function () {
    expect(true)->toBeTrue();
    return Customer::class;
});

test('DEL Request', function () {
    expect(true)->toBeTrue();
    return DelCustomer::class;
});

test('Bad Data', function () {
    expect(true)->toBeTrue();
    return getBadCustomerData();
});

test('POST', function ($requestClass, $dataObject, $idKey, $dataArray) {
    $response = connector()->send(new $requestClass($dataArray));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
    return $response->array()[$idKey];
})->depends('POST Request', 'Data Object', 'ID Key', 'Good Data');