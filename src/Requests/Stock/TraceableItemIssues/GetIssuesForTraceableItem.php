<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemIssues;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetIssuesForTraceableItem
 *
 * Returns the collection of movement history records for a product. This view filters on the product
 * movements of 'Out - Write Off', 'Out - Internal', 'Out - FOC', 'Out - SOP', 'Out - POP', 'Out (No
 * Price) - POP' and 'BOM Issue'. There is no default sort (orderby).
 */
class GetIssuesForTraceableItem extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $traceableItemId Unique Id of the traceable item.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $traceableItemId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/traceable_items/{$this->traceableItemId}/traceable_item_issues";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(?SageODataBuilder $queryParameters = null): void
	{
		if ($queryParameters) {
		    $this->queryString = $queryParameters->buildQueryString();
		}
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint . $this->queryString;
	}
}
