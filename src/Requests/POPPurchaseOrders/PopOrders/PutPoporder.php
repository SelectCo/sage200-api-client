<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutPOPOrder
 *
 * Purchase orders are used to represent the purchase of goods or services from a supplier. They are
 * central to a business and define the terms (price, quantity and times) by which the products or
 * services will be received.<br /><br />Please note that as each line is updated independently, as
 * part of a PUT request, a failed line will return an error in the API response body, however, all
 * lines prior to this will be updated. Subsequent lines to the error will not be posted.
 */
class PutPoporder extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the POP order.
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
