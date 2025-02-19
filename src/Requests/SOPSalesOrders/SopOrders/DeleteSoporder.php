<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSOPOrder
 *
 * Sales orders are used to represent the sale of goods or services to a customer. They are central to
 * a business and define the terms (price, quantity and times) by which the products or services will
 * be delivered.
 */
class DeleteSoporder extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the sales order.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/sop_orders/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
