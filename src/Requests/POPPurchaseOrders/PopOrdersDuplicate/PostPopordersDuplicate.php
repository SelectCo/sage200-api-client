<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopOrdersDuplicate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPOPOrdersDuplicate
 *
 * Returns a duplicate purchase order using the purchase order options specified.<p>This API endpoint
 * creates a draft purchase order which needs to be either:<ul><li>confirmed as a live order by using
 * the PUT pop_orders endpoint with the field 'is_editing' set to false</li><li>discarded using the
 * DELETE pop_orders endpoint</li></ul></p>
 */
class PostPopordersDuplicate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/pop_orders_duplicate";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
