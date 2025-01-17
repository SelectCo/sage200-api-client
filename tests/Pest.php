<?php

use Saloon\Http\Faking\MockClient;
use Selectco\SageApi\Sage200Connector;

$env = file_get_contents(__DIR__."/../.env.local");
$lines = explode("\n",$env);

foreach($lines as $line){
    preg_match("/([^#]+)\=(.*)/",$line,$matches);
    if(isset($matches[2])){ putenv(trim($line)); }
}

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

uses()
    ->beforeEach(fn () => MockClient::destroyGlobal())
    ->in(__DIR__);

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/
function getDefaultMultipleObjectTestPath(): string
{
    return __DIR__ . '/Feature/DefaultGETMultipleObject.php';
}
function getDefaultSingleObjectTestPath(): string
{
    return __DIR__ . '/Feature/DefaultGETSingleObject.php';
}

function getDefaultPOSTSingleObjectTestPath(): string
{
    return __DIR__ . '/Feature/DefaultPOSTSingleObject.php';
}

function getDefaultPUTSingleObjectTestPath(): string
{
    return __DIR__ . '/Feature/DefaultPUTSingleObject.php';
}

function getDefaultDELSingleObjectTestPath(): string
{
    return __DIR__ . '/Feature/DefaultDELSingleObject.php';
}

function connector(): Sage200Connector
{
    return new Sage200Connector(
        developerSubscriptionKey: getDeveloperSubscriptionKey(),
        bearerToken: getBearerToken(),
        xSite: getxSite(),
        xCompany: getxCompany()
    );
}