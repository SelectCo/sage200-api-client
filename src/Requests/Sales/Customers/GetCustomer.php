<?php

namespace Selectco\SageApi\Requests\Sales\Customers;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Sales\Customer;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetCustomer
 *
 * Customers are one of the most important entities within Sage 200 as they are associated to many
 * important resources within the application and underpin most of the main features (e.g. sales
 * orders, payment receipts, etc.).
 */
class GetCustomer extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $id,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/customers/{$this->id}";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
	{
		if ($queryParameters) {
		    $this->queryString = $queryParameters->buildQueryString();
		}
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint . $this->queryString;
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
