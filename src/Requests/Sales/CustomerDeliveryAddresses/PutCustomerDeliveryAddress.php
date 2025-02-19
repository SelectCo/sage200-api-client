<?php

namespace Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCustomerDeliveryAddress
 *
 * Customer delivery addresses for sales orders can be stored against each customer.
 */
class PutCustomerDeliveryAddress extends Request
{
	protected Method $method = Method::PUT;
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
