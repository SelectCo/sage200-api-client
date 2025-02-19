<?php

namespace Selectco\SageApi\Requests\Stock\Stocktakes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteStocktake
 *
 * Stocktakes adjust the recorded stock levels in Sage 200 with actual stock levels in order to
 * maintain accurate stock records. Stocktakes are recorded per warehouse. Items for a stocktake can be
 * selected individually (by Stock Item) or by the bin they are stored in.
 */
class DeleteStocktake extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the stocktake.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/stocktakes/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
