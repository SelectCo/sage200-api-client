# Sage 200 PHP API Client

[![Github license](https://img.shields.io/github/license/SelectCo/sage200-api-client "Github license")](https://github.com/SelectCo/sage200-api-client/blob/main/LICENSE)
[![Open issues](https://img.shields.io/github/issues/SelectCo/sage200-api-client "Open issues")](https://github.com/SelectCo/sage200-api-client/issues)
[![Open Pull Requests](https://img.shields.io/github/issues-pr/SelectCo/sage200-api-client "Open Pull Requests")](https://github.com/SelectCo/sage200-api-client/pulls)
[![Last commit](https://img.shields.io/github/last-commit/SelectCo/sage200-api-client "Last commit")](https://github.com/SelectCo/sage200-api-client/commits/main)

An unofficial API client to interact with the Sage200 API.  This package is powered by [Saloon](https://github.com/sammyjo20/saloon).

## Requirements

 - Sage200
   - Sage200 API setup and configured.
   - Developer subscription key
   - Client ID & Client Secret
 -  An authentication method setup
 - PHP ^8.1

## Authentication

This client does not provide any authenticating methods.  The connector is expecting a bearer token which is used to authenticate requests.  The bearer token along with the subscription key must be passed to the connector on initialization.

For more information on authentication and how to generate a token, please refer to the official [Sage200 API Documentation](https://developer.sage.com/200/api/).

## Installation

Add GitHub repo to your composer.json repositories.
```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/SelectCo/sage200-api-client.git"
        }
    ]
```
Require package with composer.
```shell
composer require selectco\sage-api
```

## Usage

Each API endpoint can be located in the same location as the official documents.
Most endpoints require the X-Company and X-Site header be set.  These can be set when initializing the Sage200Connector or by using the connector methods `setCompany($company)` and `setSite($site)`.

### Responses
All endpoints return a Saloon\Http\Response class.  This response class contains many helpful methods for interacting with your HTTP response like seeing the HTTP status code and retrieving the body.
```php
try {
    $response = $sage200->general()->warehouses()->getSites();
    $response->status();
    $response->body();
    $response->dto();
} catch (FatalRequestException|RequestException $e) {
    //$e->getMessage();
}
```

Below are some of the key methods provided by Saloon's Response class.

|                           Method                           | Description                                                                                                             |
|:----------------------------------------------------------:|-------------------------------------------------------------------------------------------------------------------------|
|                           status                           | Returns the response status code.                                                                                       |
|                          headers                           | Returns all response headers                                                                                            |
|                           header                           | Returns a given header                                                                                                  |
|                            body                            | Returns the raw response body as a string                                                                               |
|                            json                            | Retrieves a JSON response body and json_decodes it into an array.                                                       |
|                           array                            | Alias of json                                                                                                           |
|                          collect                           | Retrieves a JSON response body and json_decodes it into a Laravel Collection. Requires illuminate/collections.          |
|                           object                           | Retrieves a JSON response body and json_decodes it into an object.                                                      |
|                         xmlReader                          | Used for XML responses - returns a XML Wrangler reader. Requires saloonphp/xml-wrangler.                                |
|                            dom                             | Used for HTML responses - returns a Symfony DOM Crawler instance. Requires symfony/dom-crawler.                         |
|                           stream                           | Returns the response body as an instance of StreamInterface                                                             |
|                       saveBodyToFile                       | Allows you to save the raw body to a file or open file resource.                                                        |
|                            dto                             | Converts the response into a data-transfer object. You must define your DTO first, click here to read more.             |
|                         dtoOrFail                          | Will work just like dto but will throw an exception if the response is considered "failed".                             |
| ok, successful, redirect, failed, clientError, serverError | Methods used to determine if a request was successful or not based on status code. The failed method can be customised. |
|                           throw                            | Will throw an exception if the response is considered "failed".                                                         |
|                     getPendingRequest                      | Returns the PendingRequest class that was built up for the request.                                                     |
|                       getPsrRequest                        | Returns the PSR-7 request that was built up by Saloon                                                                   |
|                       getPsrResponse                       | Return the PSR-7 response that was built up by the HTTP client/sender.                                                  |

### Sage OData Query Builder
To aid in the creation of query strings, an OData builder has been included.  Only queries that are accepted by the API have been added.

For POST and PUT requests these are:

 - `filter(array|string $filter)` - TODO - Allows you to return records that match your specified criteria. You can use more than one $filter as part of your request by including the and/or operators.
 - `select(array|string $select)` - Limit the fields returned within a collection request.
 - `orderBy(string $field, string $order = 'asc')` - Return a collection in ascending or descending order.
 - `top(int $number)` - Maximum number of JSON resources in a request.
 - `skip(int $number)` - The number of items in the collection be skipped and not included in the result.
 - `expand(string $field)` - Include child JSON resources that are linked to the parent JSON resource within your results.
 - `count(bool $enable = true)` - The number of entities within the collection.

GET requests are limited to `select()`, `expand()`, and `metadata()` query string.

### Request Body Validation
This client uses the symfony/validator package to validate entities sent via PUT/POST requests against the requirements set by Sage.  These can be found on each DataObject or referring to the Sage API documentation.

If any request does not pass these validation checks, a `DataValidationException` will be thrown.



### Examples

**To get list of all sites as DataObjects**
```php
use Selectco\SageApi\Sage200Connector;
use Selectco\SageApi\DataObjects\General\Sites;

$sage200 = new Sage200Connector(
   developerSubscriptionKey: $key,
   bearerToken: $token
);

try {
    /** @var Sites[] $sites */
$sites = $sage200->general()->warehouses()->getSites()->dto();
} catch (FatalRequestException|RequestException $e) {
    //$e->getMessage();
}

foreach ($sites as $site ) {
    echo $site->company_id;
}
```

**Get list of warehouses for specific Company & Site and return a DataObject**
```php
use Selectco\SageApi\Sage200Connector;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Selectco\SageApi\Requests\Stock\Warehouses\GetWarehouses;

$sage200 = new Sage200Connector(
   developerSubscriptionKey: $key,
   bearerToken: $token,
   xCompany: $company,
   xSite: $site
);

try {
    /** @var Warehouse[] $warehouses */
    $warehouses = $sage200->send(new GetWarehouses())->dto();
} catch (FatalRequestException|RequestException) {
    //$e->getMessage();
}

foreach ($warehouses as $warehouse ) {
    echo $warehouse->company_id;
}
```

**Get warehouse for specific Company & Site by id and return a DataObject**
```php
use Selectco\SageApi\Sage200Connector;
use Selectco\SageApi\DataObjects\Stock\Warehouse;

$sage200 = new Sage200Connector(
   developerSubscriptionKey: $key,
   bearerToken: $token,
   xCompany: $company,
   xSite: $site
);

try {
    /** @var Warehouse $warehouses */
    $warehouses = $sage200->stock()->warehouses()->getWarehouse($id)->dto();
} catch (FatalRequestException|RequestException) {
    //$e->getMessage();
}

echo $warehouse->company_id;
```

**Get list of warehouses for specific Company & Site as DataObjects with query filter using OData builder**
```php
use Selectco\SageApi\Sage200Connector;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\DataObjects\Stock\Warehouse;

$sage200 = new Sage200Connector(
   developerSubscriptionKey: $key,
   bearerToken: $token,
   xCompany: $company,
   xSite: $site
);

$queryParameters = new SageODataBuilder();
$queryParameters->select(['id', 'name'])->orderBy('name')->top(5);

try {
    /** @var Warehouse[] $warehouses */
    $warehouses = $sage200->stock()->warehouses()->getWarehouses($queryParameters)->dto();
} catch (FatalRequestException|RequestException) {
    //$e->getMessage();
}

foreach ($warehouses as $warehouse ) {
    echo $warehouse->company_id;
}
```

## Testing


## Changelog

Please see [CHANGELOG](CHANGELOG) for more information on what has changed recently.

## Resources

[Sage 200 API Documentation](https://developer.sage.com/200/reference/)

[Saloon Documentation](https://docs.saloon.dev/)

[Saloon GitHub](https://github.com/saloonphp/saloon)

[Symfony Validator](https://symfony.com/doc/current/validation.html)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
