<?php

namespace Selectco\SageApi\Requests\Stock\ProductSuppliers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductSupplier
 *
 * Product suppliers are used to record suppliers of products. The supplier details are used when
 * creating purchase orders. A supplier can be the preferred supplier for a product. The preferred
 * supplier details are suggested when entering a purchase order for the product.
 */
class DeleteProductSupplier extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the product supplier.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/product_suppliers/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
