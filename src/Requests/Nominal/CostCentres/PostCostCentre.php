<?php

namespace Selectco\SageApi\Requests\Nominal\CostCentres;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCostCentre
 *
 * Cost centres are typically used to aid collating related costs and reporting on a specific segment
 * of an organisation i.e. a company division such as sales or production.
 */
class PostCostCentre extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
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
