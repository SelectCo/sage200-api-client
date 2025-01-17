<?php
declare(strict_types=1);

//Load default test cases
require_once getDefaultMultipleObjectTestPath();

use Selectco\SageApi\DataObjects\Sales\SalesPostedTransaction;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransactions;
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
    return new GetSalesPostedTransactions();
})->depends('connector');

test('Data Object', function () {
    expect(true)->toBeTrue();
    return SalesPostedTransaction::class;
});

test('ID Key', function() {
    expect(true)->toBeTrue();
    return 'id';
});

test('Key Array', function () {
    expect(true)->toBeTrue();
    return ['id', 'trader_transaction_type'];
});