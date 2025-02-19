<?php

namespace Selectco\SageApi\Requests\Nominal\Departments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostDepartment
 *
 * Departments are a subdivision of cost centres and are used where specific costs or revenue need to
 * be collated and reported on separately. For example, a cost centre could be a sales area such as
 * North East or South West and different departments could be Administration and Training.
 */
class PostDepartment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/departments";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
