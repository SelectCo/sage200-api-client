<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\BadRequestException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;


test('Test request', function ($requestClass, $dataObject) {
    $queryParameters = new SageODataBuilder();
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
})->depends('Request Class', 'Data Object');


test('Test request with SELECT query parameters', function ($requestClass, $dataObject, $keyArray) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select($keyArray);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and($response->json())->toHaveKeys($keyArray)->toHaveLength(2)
        ->and($response->dto())->toBeInstanceOf($dataObject);
})->depends('Request Class', 'Data Object', 'Key Array');


test('Test request with invalid SELECT query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id111', 'name111']);
    $requestClass->setQueryParameters($queryParameters);

    expect(fn() => connector()->send($requestClass))->toThrow(BadRequestException::class);
})->depends('Request Class');


//TODO
/**test('Test request with EXPAND query parameters', function ($requestClass, $dataObject, $objectId) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id', 'name'])->orderBy('name')->top(5);

    $response = connector()->send(new $requestClass($objectId));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
})->depends('Request Class', 'Data Object', 'Object ID');
*/


test('Test request with METADATA query parameters', function ($requestClass, $dataObject) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->metadata();
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
})->depends('Request Class', 'Data Object');