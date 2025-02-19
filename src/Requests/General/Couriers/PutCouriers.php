<?php

namespace Selectco\SageApi\Requests\General\Couriers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCouriers
 *
 * The courier used for an order.
 */
class PutCouriers extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/couriers";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
