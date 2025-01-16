<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Sales\Customers;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Sales\Customer;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

class GetCustomer extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param int $id Unique id of the customer.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected int $id, SageODataBuilder|null $queryParameters = null)
    {
        $this->endPoint = "/customers/{$this->id}";
        $this->queryString = '';
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint . $this->queryString;
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return void
     */
    public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
    {
        if ($queryParameters) {
            $this->queryString = $queryParameters->buildSingleObjectQueryString();
        }
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