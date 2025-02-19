<?php

namespace Selectco\SageApi\Requests\Sales\CustomerEmails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerEmailForCustomerContact
 *
 * Contact specific email addresses can be queried, or updated in isolation, separate to the rest of
 * the customer contact details. Calling this resource doesn't return, or update any other customer
 * contact fields.
 */
class PutCustomerEmailForCustomerContact extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 */
	public function __construct(
		protected float|int $customerContactId,
		protected float|int $id,
	) {
		$this->endPoint = "/customer_contacts/{$this->customerContactId}/customer_emails/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
