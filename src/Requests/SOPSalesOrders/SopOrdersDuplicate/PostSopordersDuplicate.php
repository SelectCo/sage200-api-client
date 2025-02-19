<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopOrdersDuplicate;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSOPOrdersDuplicate
 *
 * Returns a duplicate sales order using the sales order options specified.<p>This API endpoint creates
 * a draft sales order which needs to be either:<ul><li>confirmed as a live order by using the PUT
 * sop_orders endpoint with the field 'is_editing' set to false</li><li>discarded using the DELETE
 * sop_orders endpoint</li></ul></p>
 */
class PostSopordersDuplicate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/sop_orders_duplicate";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
