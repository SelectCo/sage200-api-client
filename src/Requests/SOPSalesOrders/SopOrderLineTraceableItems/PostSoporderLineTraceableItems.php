<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrderLineTraceableItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPOrderLineTraceableItems
 *
 * Gets the list of traceable items for a product associated with the sales order line.
 */
class PostSoporderLineTraceableItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_order_line_traceable_items";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
