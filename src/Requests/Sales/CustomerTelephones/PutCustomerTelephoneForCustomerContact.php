<?php

namespace Selectco\SageApi\Requests\Sales\CustomerTelephones;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerTelephoneForCustomerContact
 *
 * Contact specific telephone numbers can be queried, or updated in isolation, separate to the rest of
 * the customer contact details. Calling this resource doesn't return, or update any other customer
 * contact fields.
 */
class PutCustomerTelephoneForCustomerContact extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 */
	public function __construct(
		protected float|int $id,
		protected float|int $customerContactId,
	) {
		$this->endPoint = "/customer_contacts/{$this->customerContactId}/customer_telephones/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
