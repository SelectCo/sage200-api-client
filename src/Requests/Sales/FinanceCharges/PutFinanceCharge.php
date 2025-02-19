<?php

namespace Selectco\SageApi\Requests\Sales\FinanceCharges;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutFinanceCharge
 *
 * Update the Finance charge.
 */
class PutFinanceCharge extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the Finance charge.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/finance_charges/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
