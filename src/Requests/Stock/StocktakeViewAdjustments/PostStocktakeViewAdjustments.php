<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeViewAdjustments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostStocktakeViewAdjustments
 *
 * Returns stocktake count sheet items on a stocktake including discrepancies.
 */
class PostStocktakeViewAdjustments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/stocktake_view_adjustments";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
