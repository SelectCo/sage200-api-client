<?php

namespace Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteStocktakeCriteriaTemplate
 *
 * Stocktake criteria templates are a set of criteria used for auto selection of stock items to add to
 * a stocktake sheet.
 */
class DeleteStocktakeCriteriaTemplate extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the stocktake criteria template.
	 */
	public function __construct(
		protected float|int $id,
	) {
		$this->endPoint = "/stocktake_criteria_templates/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
