<?php

namespace Selectco\SageApi\Requests\Sales\CustomerEmails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerEmail
 *
 * Contact specific email addresses can be queried, or updated in isolation, separate to the rest of
 * the customer contact details. Calling this resource doesn't return, or update any other customer
 * contact fields.
 */
class DeleteCustomerEmail extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer email.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_emails/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
