<?php

namespace Selectco\SageApi\Requests\Purchases\PaymentGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutPaymentGroup
 *
 * Update the Payment group.
 */
class PutPaymentGroup extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the Payment group.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/payment_groups/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
