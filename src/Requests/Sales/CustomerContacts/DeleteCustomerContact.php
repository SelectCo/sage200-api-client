<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerContact
 *
 * Delete a customer contact.
 */
class DeleteCustomerContact extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer contact.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_contacts/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
