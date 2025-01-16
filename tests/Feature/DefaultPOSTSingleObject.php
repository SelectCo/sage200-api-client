<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\DataValidationException;

test('POST', function ($requestClass, $dataObject, $key, $dataArray) {
    $response = connector()->send(new $requestClass($dataArray));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
    return $response->array()[$key];
})->depends('POST Request', 'Data Object', 'ID Key', 'Good Data');

test('DEL', function ($requestClass, $objectId) {
    $response = connector()->send(new $requestClass($objectId));

    expect($response->status())->toEqual(200);
})->depends('DEL Request', 'POST');

test('Test invalid POST', function ($requestClass, $dataArray) {
    expect(fn() => connector()->send(new $requestClass($dataArray)))->toThrow(DataValidationException::class);
})->depends('POST Request', 'Bad Data');