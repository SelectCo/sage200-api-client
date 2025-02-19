<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeCountSheetItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutStocktakeCountSheetItems
 *
 * Stocktake count sheet items for the stocktake.
 */
class PutStocktakeCountSheetItems extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the stocktake count sheet item.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/stocktake_count_sheet_items/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
