<?php

namespace Selectco\SageApi\Requests\General\Couriers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCourier
 *
 * The courier used for an order.
 */
class PutCourier extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the courier.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/couriers/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
