<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemsAmendTraceableItems;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostTraceableItemsAmendTraceableItems
 *
 * Gets the list of assigned traceable items for a product that can be amended.
 */
class PostTraceableItemsAmendTraceableItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/traceable_items_amend_traceable_items";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
