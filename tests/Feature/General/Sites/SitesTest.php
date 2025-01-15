<?php
declare(strict_types=1);

use Selectco\SageApi\DataObjects\General\Sites;
use Selectco\SageApi\Requests\General\Sites\GetSites;

test('Test GetSites', function () {

    $response = connector()->send(new GetSites());

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf(Sites::class);
});