<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPOrdersNew
 *
 * Returns a sales order with all the default values for a customer. The API endpoint does not persist
 * the sales order.
 */
class PostSopordersNew extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_orders_new";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
