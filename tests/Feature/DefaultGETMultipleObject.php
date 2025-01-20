<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\BadRequestException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;


test('Test request', function ($requestClass, $dataObject) {
    $queryParameters = new SageODataBuilder();
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
})->depends('Request Class', 'Data Object');


test('Test request with SELECT query parameters', function ($requestClass, $dataObject, $keyArray) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select($keyArray);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and($response->json()[0])->toHaveKeys($keyArray)->toHaveLength(2)
        ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
})->depends('Request Class', 'Data Object', 'Key Array');


test('Test request with invalid SELECT query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id111', 'name111']);
    $requestClass->setQueryParameters($queryParameters);

    expect(fn() => connector()->send($requestClass))->toThrow(BadRequestException::class);
})->depends('Request Class', 'Data Object');


//TODO - ADD FILTER LOGIC
/**test('Test request with FILTER query parameters', function ($requestClass, $dataObject, $keyArray) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select($keyArray);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send(new $requestClass($queryParameters));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
})->depends('Request Class', 'Data Object', 'Key Array');
*/

//TODO - ADD FILTER LOGIC
/**test('Test request with invalid FILTER query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['ids', 'names']);
    $requestClass->setQueryParameters($queryParameters);
    expect(fn() => connector()->send(new $requestClass($queryParameters)))->toThrow(BadRequestException::class);
})->depends('Request Class', 'Data Object');
*/

test('Test request with ORDERBY ASC query parameters', function ($requestClass, $dataObject, $idKey) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy($idKey);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->json()[2][$idKey])->toBeGreaterThan($response->json()[1][$idKey])
            ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
    }
})->depends('Request Class', 'Data Object', 'ID Key');


test('Test request with ORDERBY DESC query parameters', function ($requestClass, $dataObject, $idKey) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy($idKey, 'desc');
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->json()[1][$idKey])->toBeGreaterThan($response->json()[2][$idKey])
            ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
    }
})->depends('Request Class', 'Data Object', 'ID Key');


test('Test request with invalid ORDERBY query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy('id111');
    $requestClass->setQueryParameters($queryParameters);

    expect(fn() => connector()->send($requestClass))->toThrow(BadRequestException::class);
})->depends('Request Class', 'Data Object');


test('Test request with TOP query parameters', function ($requestClass, $dataObject) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->top(2);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->dto())->toHaveCount(2)
            ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
    }
})->depends('Request Class', 'Data Object');


test('Test request with invalid TOP query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->top(-2);
    $requestClass->setQueryParameters($queryParameters);

    expect(fn() => connector()->send($requestClass))->toThrow(BadRequestException::class);
})->depends('Request Class', 'Data Object');


test('Test request with SKIP query parameters', function ($requestClass, $dataObject, $idKey) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy($idKey);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);
    $topTwo = count($response->json());

    if ($topTwo > 1) {
        $id = $response->json()[1][$idKey];
        $queryParameters = new SageODataBuilder();
        $queryParameters->skip(1)->orderBy($idKey);
        $requestClass->setQueryParameters($queryParameters);
        $response = connector()->send($requestClass);

        expect($response->status())->toEqual(200)
            ->and($response->json()[0][$idKey])->toEqual($id)
            ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
    }
})->depends('Request Class', 'Data Object', 'ID Key');


//TODO
/**test('Test request with EXPAND query parameters', function ($requestClass, $dataObject) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id', 'name'])->orderBy('name')->top(5);
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send(new $requestClass($queryParameters));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($dataObject);
})->depends('Request Class', 'Data Object');
*/

test('Test request with COUNT query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->count();
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200)
        ->and((int)$response->body())->toBeInt();
})->depends('Request Class');


test('Test request with METADATA query parameters', function ($requestClass) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->metadata();
    $requestClass->setQueryParameters($queryParameters);
    $response = connector()->send($requestClass);

    expect($response->status())->toEqual(200);
})->depends('Request Class');