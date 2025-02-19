<?php

namespace Selectco\SageApi\Requests\Stock\AlternativeProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostAlternativeProduct
 *
 * Alternative products are suitable products that can be offered when a requested product is
 * unavailable. An alternative product can be the preferred alternative for a product. When stock is
 * issued for a sales order, if the product is unavailable, the preferred alternative can be chosen, if
 * stock is available.
 */
class PostAlternativeProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/alternative_products";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
