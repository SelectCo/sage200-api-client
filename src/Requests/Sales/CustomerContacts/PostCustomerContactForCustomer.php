<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContacts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerContactForCustomer
 *
 * Create a new customer contact for a customer in the Sage 200 Sales Ledger.
 */
class PostCustomerContactForCustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 */
	public function __construct(
		protected float|int $customerId,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_contacts";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
