<?php

namespace Selectco\SageApi\Requests\Sales\CustomerFaxes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCustomerFaxForCustomerContact
 *
 * Contact specific fax numbers can be queried, or updated in isolation, separate to the rest of the
 * customer contact details. Calling this resource doesn't return, or update any other customer contact
 * fields.
 */
class PostCustomerFaxForCustomerContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 */
	public function __construct(
		protected float|int $customerContactId,
	) {
		$this->endPoint = "/customer_contacts/{$this->customerContactId}/customer_faxes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
