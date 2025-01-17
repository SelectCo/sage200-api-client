<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\UnauthorizedException;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Selectco\SageApi\Sage200Connector;

test('Test connector against sites.', function () {
    $connector = new Sage200Connector(
        developerSubscriptionKey: getDeveloperSubscriptionKey(),
        bearerToken: getBearerToken()
    );
    $response = $connector->send(new GetSites());

    expect($response->status())->toEqual(200);
});

test('Test connector with invalid bearer token.', function () {
    $connector = new Sage200Connector(
        developerSubscriptionKey: getDeveloperSubscriptionKey(),
        bearerToken: ''
    );
    expect(fn() => $connector->send(new GetSites()))->toThrow(UnauthorizedException::class);
});

test('Test connector with invalid developer subscription key.', function () {
    $connector = new Sage200Connector(
        developerSubscriptionKey: '',
        bearerToken: getBearerToken()
    );
    expect(fn() => $connector->send(new GetSites()))->toThrow(UnauthorizedException::class);
});