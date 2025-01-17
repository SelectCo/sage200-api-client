<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\NotFoundException;

test('POST', function ($requestClass, $dataObject, $idKey, $dataArray) {
    $response = connector()->send(new $requestClass($dataArray));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toBeInstanceOf($dataObject);
    return $response->array()[$idKey];
})->depends('POST Request', 'Data Object', 'ID Key', 'Good Data');

test('DEL', function ($requestClass, $objectId) {
    $response = connector()->send(new $requestClass($objectId));

    expect($response->status())->toEqual(200);
    return $objectId;
})->depends('DEL Request', 'POST');

test('Bad DEL', function ($requestClass, $objectId) {
    expect(fn() => connector()->send(new $requestClass($objectId)))->toThrow(NotFoundException::class);
})->depends('DEL Request', 'DEL');