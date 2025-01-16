<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\DataValidationException;

test('POST', function ($requestClass, $dataObject, $idKey, $dataArray) {
    $response = connector()->send(new $requestClass($dataArray));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
    return $response->array()[$idKey];
})->depends('POST Request', 'Data Object', 'ID Key', 'Good Data');

test('PUT', function ($requestClass, $dataObject, $objectId, $dataArray) {
    $response = connector()->send(new $requestClass($objectId, $dataArray));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
    return $objectId;
})->depends('PUT Request', 'Data Object', 'POST', 'Good Data');

test('Invalid PUT', function ($requestClass, $objectId, $dataArray) {
    expect(fn() => connector()->send(new $requestClass($objectId, $dataArray)))->toThrow(DataValidationException::class);
    return $objectId;
})->depends('PUT Request', 'PUT', 'Bad Data');

test('DEL', function ($requestClass, $objectId) {
    $response = connector()->send(new $requestClass($objectId));

    expect($response->status())->toEqual(200);
})->depends('DEL Request', 'Invalid PUT');