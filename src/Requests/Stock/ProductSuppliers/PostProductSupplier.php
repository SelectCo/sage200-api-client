<?php

namespace Selectco\SageApi\Requests\Stock\ProductSuppliers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostProductSupplier
 *
 * Product suppliers are used to record suppliers of products. The supplier details are used when
 * creating purchase orders. A supplier can be the preferred supplier for a product. The preferred
 * supplier details are suggested when entering a purchase order for the product.
 */
class PostProductSupplier extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/product_suppliers";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
