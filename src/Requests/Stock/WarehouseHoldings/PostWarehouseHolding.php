<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHoldings;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostWarehouseHolding
 *
 * All stock within Sage 200 regardless of type (Stock, Service/labour, or Miscellaneous), require a
 * holding location. The location indicates where an item is stored and the stock level settings for
 * each product in the warehouse i.e. the re-order level, the minimum and maximum stock levels. <br
 * /><br />Items with a type of 'Stock' have levels recorded for each warehouse location and the levels
 * are used when allocating, issuing and receiving stock.
 */
class PostWarehouseHolding extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/warehouse_holdings";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
