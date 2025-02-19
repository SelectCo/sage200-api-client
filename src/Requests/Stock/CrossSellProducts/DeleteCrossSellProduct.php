<?php

namespace Selectco\SageApi\Requests\Stock\CrossSellProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCrossSellProduct
 *
 * Cross sell products are complimentary products which are often sold together with another product.
 * For example, if you sell a printer, you might want to show print cartridges or cables for that
 * printer. Cross sell products can help speed up entering a full sales order.
 */
class DeleteCrossSellProduct extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the cross sell product.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/cross_sell_products/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
