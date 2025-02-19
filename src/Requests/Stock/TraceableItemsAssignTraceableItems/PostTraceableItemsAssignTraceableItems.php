<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemsAssignTraceableItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostTraceableItemsAssignTraceableItems
 *
 * Gets the list of unassigned traceable items for a product.
 */
class PostTraceableItemsAssignTraceableItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/traceable_items_assign_traceable_items";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
