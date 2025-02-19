<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostStocktakeCriteriaTemplate
 *
 * Stocktake criteria templates are a set of criteria used for auto selection of stock items to add to
 * a stocktake sheet.
 */
class PostStocktakeCriteriaTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	public function __construct()
	{
		$this->endPoint = "/stocktake_criteria_templates";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
