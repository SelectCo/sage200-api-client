<?php
declare(strict_types=1);

use Selectco\SageApi\Exception\BadRequestException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

test('Test request', function ($id, $request, $object) {
    $response = connector()->send(new $request($id));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($object);
})->depends('id', 'request', 'object');

test('Test request with SELECT query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id', 'name']);

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    expect($response->status())->toEqual(200)
        ->and($response->json()[0])->toHaveKeys(['name', 'id'])->toHaveLength(2)
        ->and($response->dto())->toContainOnlyInstancesOf($object::class);
})->depends('id', 'request', 'object');

test('Test request with invalid SELECT query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['ids', 'names']);

    expect(fn() => connector()->send(new $request($id, $queryParameters->buildQueryString())))->toThrow(BadRequestException::class);
})->depends('id', 'request', 'object');

//TODO - ADD FILTER LOGIC
test('Test request with FILTER query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id', 'name']);

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($object::class);
})->depends('id', 'request', 'object');

//TODO - ADD FILTER LOGIC
test('Test request with invalid FILTER query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['ids', 'names']);

    expect(fn() => connector()->send(new $request($id, $queryParameters->buildQueryString())))->toThrow(BadRequestException::class);
})->depends('id', 'request', 'object');

test('Test request with ORDERBY ASC query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy('id');

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->json()[2]['id'])->toBeGreaterThan($response->json()[1]['id'])
            ->and($response->dto())->toContainOnlyInstancesOf($object::class);
    }
})->depends('id', 'request', 'object');

test('Test request with ORDERBY DESC query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy('id', 'desc');

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->json()[1]['id'])->toBeGreaterThan($response->json()[2]['id'])
            ->and($response->dto())->toContainOnlyInstancesOf($object::class);
    }
})->depends('id', 'request', 'object');

test('Test request with invalid ORDERBY query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy('ids');

    expect(fn() => connector()->send(new $request($id, $queryParameters->buildQueryString())))->toThrow(BadRequestException::class);
})->depends('id', 'request', 'object');

test('Test request with TOP query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->top(2);

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    if (count($response->json()) > 1) {
        expect($response->status())->toEqual(200)
            ->and($response->dto())->toHaveCount(2)
            ->and($response->dto())->toContainOnlyInstancesOf($object::class);
    }
})->depends('id', 'request', 'object');

test('Test request with invalid TOP query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->top(-2);

    expect(fn() => connector()->send(new $request($id, $queryParameters->buildQueryString())))->toThrow(BadRequestException::class);
})->depends('id', 'request', 'object');

test('Test request with SKIP query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->orderBy('id');

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));
    $topTwo = count($response->json());

    if ($topTwo > 1) {
        $id = $response->json()[1]['id'];
        $queryParameters = new SageODataBuilder();
        $queryParameters->skip(1)->orderBy('id');

        $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

        expect($response->status())->toEqual(200)
            ->and($response->json()[0]['id'])->toEqual($id)
            ->and($response->dto())->toContainOnlyInstancesOf($object::class);
    }
})->depends('id', 'request', 'object');

//TODO
test('Test request with EXPAND query parameters', function ($id, $request, $object) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->select(['id', 'name'])->orderBy('name')->top(5);

    $response = connector()->send(new $request($id));

    expect($response->status())->toEqual(200)
        ->and($response->dto())->toContainOnlyInstancesOf($object::class);
})->depends('id', 'request', 'object');

test('Test request with COUNT query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->count();

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    expect($response->status())->toEqual(200)
        ->and((int)$response->body())->toBeInt();
})->depends('id', 'request', 'object');

test('Test request with METADATA query parameters', function ($id, $request) {
    $queryParameters = new SageODataBuilder();
    $queryParameters->metadata();

    $response = connector()->send(new $request($id, $queryParameters->buildQueryString()));

    expect($response->status())->toEqual(200)
        ->and($response->json()[0])->toHaveKeys(['name', 'type']);
})->depends('id', 'request', 'object');