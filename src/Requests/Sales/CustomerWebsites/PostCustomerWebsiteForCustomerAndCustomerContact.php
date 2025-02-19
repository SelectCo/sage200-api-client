<?php

namespace Selectco\SageApi\Requests\Sales\CustomerWebsites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerWebsiteForCustomerAndCustomerContact
 *
 * Contact specific websites can be queried, or updated in isolation, separate to the rest of the
 * customer contact details. Calling this resource doesn't return, or update any other customer contact
 * fields.
 */
class PostCustomerWebsiteForCustomerAndCustomerContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 */
	public function __construct(
		protected float|int $customerContactId,
		protected float|int $customerId,
	) {
		$this->endPoint = "/customers/{$this->customerId}/customer_contacts/{$this->customerContactId}/customer_websites";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
