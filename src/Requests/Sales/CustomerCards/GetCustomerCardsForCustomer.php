<?php

namespace Selectco\SageApi\Requests\Sales\CustomerCards;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetCustomerCardsForCustomer
 *
 * Customer cards are the credit cards used by the customer. They are created when a transaction is
 * made using an Online Card Provider. The description used for the card can be renamed, or the card
 * removed. Multiple cards can be associated with one account. The date and time that the card was last
 * used is also recorded.
 */
class GetCustomerCardsForCustomer extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_cards";
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
