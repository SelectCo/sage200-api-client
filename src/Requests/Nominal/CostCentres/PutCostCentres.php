<?php

namespace Selectco\SageApi\Requests\Nominal\CostCentres;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutCostCentres
 *
 * Cost centres are typically used to aid collating related costs and reporting on a specific segment
 * of an organisation i.e. a company division such as sales or production.
 */
class PutCostCentres extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/cost_centres";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
