<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeletePOPOrder
 *
 * Purchase orders are used to represent the purchase of goods or services from a supplier. They are
 * central to a business and define the terms (price, quantity and times) by which the products or
 * services will be received.
 */
class DeletePoporder extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the purchase order.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/pop_orders/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
