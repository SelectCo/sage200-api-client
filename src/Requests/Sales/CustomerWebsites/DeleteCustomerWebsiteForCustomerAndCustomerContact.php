<?php

namespace Selectco\SageApi\Requests\Sales\CustomerWebsites;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerWebsiteForCustomerAndCustomerContact
 *
 * Contact specific websites can be queried, or updated in isolation, separate to the rest of the
 * customer contact details. Calling this resource doesn't return, or update any other customer contact
 * fields.
 */
class DeleteCustomerWebsiteForCustomerAndCustomerContact extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 */
	public function __construct(
		protected float|int $customerId,
		protected float|int $customerContactId,
		protected float|int $id,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_contacts/{$this->customerContactId}/customer_websites/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
