<?php

namespace Selectco\SageApi\Requests\Stock\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutProduct
 *
 * Products are used to track stock within Sage 200. This is not just for physical items, but also for
 * items that are ordered direct from suppliers, services, and time or labour that can be included on
 * customer invoices.<P>Each stock item has default settings that are used each time the item is bought
 * or sold. Some of these are inherited from the product group and some are set on each item.</P>
 */
class PutProduct extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the product.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/products/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
