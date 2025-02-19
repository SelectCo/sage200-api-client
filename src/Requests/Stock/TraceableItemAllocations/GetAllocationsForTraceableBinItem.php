<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemAllocations;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetAllocationsForTraceableBinItem
 *
 * Returns the collection of allocations for a product. There is no default sort (orderby).
 */
class GetAllocationsForTraceableBinItem extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $traceableBinItemId Unique Id of the traceable bin item.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $traceableBinItemId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/traceable_bin_items/{$this->traceableBinItemId}/traceable_item_allocations";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
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
