<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutWarehouse
 *
 * All stock within Sage 200, regardless of type (Stock, Service/labour, or Miscellaneous), requires a
 * holding location. By default, the HOME warehouse is created within Sage 200, you can then create
 * your own warehouses.
 */
class PutWarehouse extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the warehouse.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/warehouses/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
