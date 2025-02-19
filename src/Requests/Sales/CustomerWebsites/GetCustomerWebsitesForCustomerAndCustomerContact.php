<?php

namespace Selectco\SageApi\Requests\Sales\CustomerWebsites;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetCustomerWebsitesForCustomerAndCustomerContact
 *
 * Contact specific websites can be queried, or updated in isolation, separate to the rest of the
 * customer contact details. Calling this resource doesn't return, or update any other customer contact
 * fields.
 */
class GetCustomerWebsitesForCustomerAndCustomerContact extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $customerContactId,
		protected float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_contacts/{$this->customerContactId}/customer_websites";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(?SageODataBuilder $queryParameters = null): void
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
}
