<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemsAssign;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostTraceableItemsAssign
 *
 * Assigns batch or serial numbers to unassigned traceable items.
 */
class PostTraceableItemsAssign extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/traceable_items_assign";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
