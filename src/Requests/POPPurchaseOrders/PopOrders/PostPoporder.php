<?php

namespace Selectco\SageApi\Requests\POPPurchaseOrders\PopOrders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostPOPOrder
 *
 * Purchase orders are used to represent the purchase of goods or services from a supplier. They are
 * central to a business and define the terms (price, quantity and times) by which the products or
 * services will be received.
 */
class PostPoporder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/pop_orders";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
