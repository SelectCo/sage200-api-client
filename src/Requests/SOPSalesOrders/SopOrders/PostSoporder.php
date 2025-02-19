<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPOrder
 *
 * Sales orders are used to represent the sale of goods or services to a customer. They are central to
 * a business and define the terms (price, quantity and times) by which the products or services will
 * be delivered.<br /><br />Note: Adding  traceable  items to sales orders.<br/>If you're using
 * traceable stock items and an item is set to be sold from a single batch, then the order quantity
 * must be less than or equal to quantity in the batch. If you try to order more than quantity in the
 * batch, the order cannot be posted via the API.
 */
class PostSoporder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_orders";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
