<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemLocations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetLocationsForTraceableItem
 *
 * Returns the collection of locations for a product. There is no default sort (orderby).
 */
class GetLocationsForTraceableItem extends Request
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
		$this->endPoint = "/traceable_items/{$this->traceableItemId}/traceable_item_locations";
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
