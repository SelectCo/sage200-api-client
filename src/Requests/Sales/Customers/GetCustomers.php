<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Sales\Customers;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Sales\Customer;

class GetCustomers extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param string|null $queryParameters
     */
    public function __construct(string|null $queryParameters = null)
    {
        $this->endPoint = "/customers";
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    /**
     * @param string|null $queryParameters
     * @return void
     */
    public function setQueryParameters(string|null $queryParameters = ''): void
    {
        $this->endPoint .= $queryParameters;
    }

    /**
     * @param Response $response
     * @return Customer
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): Customer
    {
        return new Customer(...$response->json());
    }
}