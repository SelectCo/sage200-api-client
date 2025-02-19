<?php

namespace Selectco\SageApi\Requests\Nominal\CostCentres;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCostCentre
 *
 * Cost centres are typically used to aid collating related costs and reporting on a specific segment
 * of an organisation i.e. a company division such as sales or production.
 */
class PutCostCentre extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the cost centre.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/cost_centres/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
