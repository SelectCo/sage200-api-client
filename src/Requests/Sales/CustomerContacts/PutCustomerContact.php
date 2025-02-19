<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerContact
 *
 * Update a customer contact in the Sage 200 Sales Ledger.
 */
class PutCustomerContact extends Request
{
	protected Method $method = Method::PUT;
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
