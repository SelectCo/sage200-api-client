<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerContactForCustomer
 *
 * Update a customer contact for customer in the Sage 200 Sales Ledger.
 */
class PutCustomerContactForCustomer extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $id Unique Id of the customer contact.
	 */
	public function __construct(
		protected float|int $customerId,
		protected float|int $id,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_contacts/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
