<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeApproveComplete;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostStocktakeApproveComplete
 *
 * Returns stocktake count sheet items for the approve and complete of a stocktake.
 */
class PostStocktakeApproveComplete extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/stocktake_approve_complete";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
