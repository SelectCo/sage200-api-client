<?php

namespace Selectco\SageApi\Requests\Stock\Products;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostProduct
 *
 * Products are used to track stock within Sage 200. This is not just for physical items, but also for
 * items that are ordered direct from suppliers, services, and time or labour that can be included on
 * customer invoices.<P>Each stock item has default settings that are used each time the item is bought
 * or sold. Some of these are inherited from the product group and some are set on each item.</P>
 */
class PostProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/products";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
