<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeEnterValues;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostStocktakeEnterValues
 *
 * Returns stocktake count sheet items to allow entry of actual quantities in stock for a stocktake.
 */
class PostStocktakeEnterValues extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/stocktake_enter_values";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
