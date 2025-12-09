# Sage 200 API Client (PHP)

A lightweight PHP client for the Sage 200 REST API. It wraps Guzzle with sensible defaults (auth headers, site/company headers, JSON, error handling), provides a request/response abstraction, and includes a fluent OData query builder for constructing query strings.

- Package: `select-co/sage200-api-client`
- License: MIT
- Minimum PHP: 7.2.5+

Links
- Source: https://github.com/SelectCo/sage200-api-client
- Issues: https://github.com/SelectCo/sage200-api-client/issues

## Features
- Simple connector with Bearer token auth and default Sage base URL
- Optional `X-Site` and `X-Company` headers
- Request/Response abstraction over Guzzle
- OData query builder for `$select`, `$filter`, `$orderby`, `$top`, `$skip`, `$expand`, `$count`
- Meaningful exceptions for common HTTP error codes
- Optional endpoint helpers when paired with `select-co/sage200-api-endpoints`

## Installation
Install via Composer:

```bash
composer require select-co/sage200-api-client
```

If you also want a typed set of endpoint/resource helpers, install the companion package (if available publicly) or include it as a path repo like in this repo's `composer.json`:

```json
{
  "repositories": [
    { "type": "path", "url": "../sage200-api-endpoints" }
  ],
  "require": {
    "select-co/sage200-api-client": "^1.0",
    "select-co/sage200-api-endpoints": "^1.0"
  }
}
```

## Quick start

```php
<?php

use SelectCo\Sage200ApiClient\Sage200Connector;
use SelectCo\Sage200ApiClient\Http\Request;
use SelectCo\Sage200ApiClient\QueryBuilder\SageODataBuilder;
use SelectCo\Sage200ApiClient\Exception\SageException;

require __DIR__ . '/vendor/autoload.php';

$token = 'YOUR_BEARER_TOKEN';
$connector = new Sage200Connector(
    bearerToken: $token,
    baseUrl: 'https://api.columbus.sage.com/uk/sage200extra/accounts/v1', // default, override if needed
    xSite: null,    // or e.g. 'mysite'
    xCompany: null, // or e.g. 'mycompany'
);

// Optionally set site/company later
$connector->setSite('mysite');
$connector->setCompany('mycompany');

// Build an OData query: /customers?$select=id,reference,name&$top=10
$query = (new SageODataBuilder())
    ->select(['id', 'reference', 'name'])
    ->top(10);

// Create a simple request by extending the base Request class
class ListCustomers extends Request
{
    protected $method = 'GET';
    protected $endPoint = '/customers';
}

$request = new ListCustomers();
$request->setQueryParameters($query);

try {
    $response = $connector->send($request);

    // Access raw contents and decode JSON
    $contents = $response->getContents();
    $json = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
    print_r($json);

    // Other helpers
    $status = $response->getStatus();
    $headers = $response->getResponse()->getHeaders();
} catch (SageException $e) {
    // One of: BadRequestException, UnauthorizedException, ForbiddenException, NotFoundException
    // Contains the raw Sage response body for debugging
    echo $e->getMessage() . PHP_EOL;
    echo $e->getSageResponse() . PHP_EOL;
}
```

## Usage

### Connector
`SelectCo\Sage200ApiClient\Sage200Connector` extends the abstract `Http\Connector` and configures:
- Authorization header: `Authorization: Bearer <token>`
- JSON Content-Type
- Optional `X-Site` and `X-Company` headers
- Base URL (defaults to Sage production URL)

You can also pass custom Guzzle options via the constructor `$clientOptions` or later through `setClientOptions()`. The client forces `http_errors=false` and will not throw Guzzle exceptions for 4xx/5xx; instead this library maps key status codes to domain exceptions.

### Requests
Create small request objects by extending `SelectCo\Sage200ApiClient\Http\Request` and defining:
- `protected $method`: one of `GET`, `POST`, `PUT`, `DELETE`
- `protected $endPoint`: e.g. `/customers`
- Optionally use `setQueryParameters(SageODataBuilder)` or `setQueryString(string)`
- Optionally set a body (for POST/PUT) by assigning `$this->body` to a JSON string

Example POST with a JSON body:

```php
class CreateCustomer extends Request {
    protected $method = 'POST';
    protected $endPoint = '/customers';

    public function __construct(array $payload)
    {
        $this->body = json_encode($payload, JSON_THROW_ON_ERROR);
    }
}

$req = new CreateCustomer([
    'reference' => 'ACME01',
    'name' => 'ACME, Inc.',
]);
$response = $connector->send($req);
```

### Response
`SelectCo\Sage200ApiClient\Http\Response` wraps a PSR-7 `ResponseInterface` and provides helpers such as:
- `getStatus()` — HTTP status code
- `getBody()` — PSR-7 body stream (`StreamInterface`)
- `getContents()` — raw body string (reads the stream)
- `getResponse()` — underlying PSR-7 response for advanced access (e.g., `getHeaders()`)

### OData query builder
Use `SelectCo\Sage200ApiClient\QueryBuilder\SageODataBuilder` to fluently construct query strings. Examples:

```php
$query = (new SageODataBuilder())
    ->select(['id', 'reference', 'name'])
    ->filter('reference', 'eq', "ACME01")
    ->andFilter('balance', 'gt', 1000)
    ->orderBy('name', 'asc')
    ->top(50)
    ->skip(100)
    ->count(true);

$request->setQueryParameters($query);
```

See inline PHPDoc in `SageODataBuilder` for many more examples: string functions, date comparisons, enums, nested filters, expands, etc.

### Error handling
The connector translates common HTTP statuses into dedicated exceptions:
- `400` → `SelectCo\Sage200ApiClient\Exception\BadRequestException`
- `401` → `SelectCo\Sage200ApiClient\Exception\UnauthorizedException`
- `403` → `SelectCo\Sage200ApiClient\Exception\ForbiddenException`
- `404` → `SelectCo\Sage200ApiClient\Exception\NotFoundException`

Each exception extends `SageException` and exposes the raw Sage response via `getSageResponse()` to help with diagnostics.

### Optional: Endpoint helpers
If the companion package `select-co/sage200-api-endpoints` is installed, `Sage200Connector::resources()` will return its `Resource` entry point, giving you a discoverable set of endpoint classes. Otherwise it returns a placeholder `Http\Resources` class.

Example:

```php
$resources = $connector->resources();
// With endpoints package present, this might expose, for example:
// $resources->customers()->list($query); // illustrative only
```

## Configuration
- Base URL: override in `Sage200Connector` constructor if using sandbox or regional endpoints
- `X-Site` / `X-Company`: set in constructor or with `setSite()` / `setCompany()`
- Guzzle options: supply associative array via constructor `clientOptions` or `setClientOptions()` later

## Development
- PRs and issues are welcome in the GitHub tracker

## License
MIT License. See `LICENSE` if provided, otherwise the license is declared in `composer.json`.
