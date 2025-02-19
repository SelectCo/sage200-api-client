<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostWarehouse
 *
 * All stock within Sage 200, regardless of type (Stock, Service/labour, or Miscellaneous), requires a
 * holding location. By default, the HOME warehouse is created within Sage 200, you can then create
 * your own warehouses.
 */
class PostWarehouse extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/warehouses";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
