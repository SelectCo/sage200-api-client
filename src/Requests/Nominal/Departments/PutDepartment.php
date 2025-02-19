<?php

namespace Selectco\SageApi\Requests\Nominal\Departments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutDepartment
 *
 * Departments are a subdivision of cost centres and are used where specific costs or revenue need to
 * be collated and reported on separately. For example, a cost centre could be a sales area such as
 * North East or South West and different departments could be Administration and Training.
 */
class PutDepartment extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the department.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/departments/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
