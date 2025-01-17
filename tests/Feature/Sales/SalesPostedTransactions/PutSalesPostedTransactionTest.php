<?php
declare(strict_types=1);

use Selectco\SageApi\DataObjects\Sales\SalesPostedTransaction;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\PutSalesPostedTransaction;
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
test('PUT', function () {
    $response = connector()->send(new PutSalesPostedTransaction(getSalesPostedTransactionId(), ['queried' => '']));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf(SalesPostedTransaction::class);
})->depends('connector');
