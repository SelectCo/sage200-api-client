<?php

namespace Selectco\SageApi\Requests\Sales\CustomerFaxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerFaxForCustomerContact
 *
 * Delete a customer fax for customer contact
 */
class DeleteCustomerFaxForCustomerContact extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 */
	public function __construct(
		protected float|int $id,
		protected float|int $customerContactId,
	) {
		$this->endPoint = "/customer_contacts/{$this->customerContactId}/customer_faxes/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
