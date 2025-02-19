<?php

namespace Selectco\SageApi\Requests\Stock\CrossSellProducts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostCrossSellProduct
 *
 * Cross sell products are complimentary products which are often sold together with another product.
 * For example, if you sell a printer, you might want to show print cartridges or cables for that
 * printer. Cross sell products can help speed up entering a full sales order.
 */
class PostCrossSellProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/cross_sell_products";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
