<?php

namespace Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomerDeliveryAddress
 *
 * Customer delivery addresses for sales orders can be stored against each customer.
 */
class DeleteCustomerDeliveryAddress extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the customer delivery address.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/customer_delivery_addresses/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
