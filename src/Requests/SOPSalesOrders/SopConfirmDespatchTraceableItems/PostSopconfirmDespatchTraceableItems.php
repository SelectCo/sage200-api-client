<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatchTraceableItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPConfirmDespatchTraceableItems
 *
 * Gets the list of traceable items for a product associated with the sales order line for despatch.
 */
class PostSopconfirmDespatchTraceableItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_confirm_despatch_traceable_items";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
