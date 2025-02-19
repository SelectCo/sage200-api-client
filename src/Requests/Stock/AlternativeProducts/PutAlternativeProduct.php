<?php

namespace Selectco\SageApi\Requests\Stock\AlternativeProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutAlternativeProduct
 *
 * Alternative products are suitable products that can be offered when a requested product is
 * unavailable. An alternative product can be the preferred alternative for a product. When stock is
 * issued for a sales order, if the product is unavailable, the preferred alternative can be chosen, if
 * stock is available.
 */
class PutAlternativeProduct extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the alternative product.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/alternative_products/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
