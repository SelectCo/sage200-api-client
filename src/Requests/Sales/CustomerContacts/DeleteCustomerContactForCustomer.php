<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerContactForCustomer
 *
 * Delete a customer contact for a customer.
 */
class DeleteCustomerContactForCustomer extends Request
{
	protected Method $method = Method::DELETE;
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
