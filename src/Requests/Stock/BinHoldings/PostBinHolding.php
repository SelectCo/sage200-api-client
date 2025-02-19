<?php

namespace Selectco\SageApi\Requests\Stock\BinHoldings;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostBinHolding
 *
 * Bins allow you to specify a place in a Warehouse where stock is stored such as a shelf or aisle.
 * Every Warehouse has a single Bin created by default called 'Unspecified'. If you don't want to use
 * bins with your warehouses, all items are stored in the 'Unspecified' bin. You can rename the
 * 'Unspecified' bin to something more meaningful for your company.
 */
class PostBinHolding extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/bin_holdings";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
