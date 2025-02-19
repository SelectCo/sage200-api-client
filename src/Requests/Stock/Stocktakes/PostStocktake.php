<?php

namespace Selectco\SageApi\Requests\Stock\Stocktakes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostStocktake
 *
 * Stocktakes adjust the recorded stock levels in Sage 200 with actual stock levels in order to
 * maintain accurate stock records. Stocktakes are recorded per warehouse. Items for a stocktake can be
 * selected individually (by Stock Item) or by the bin they are stored in.
 */
class PostStocktake extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/stocktakes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
