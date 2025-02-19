<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemBalances;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetTraceableItemBalancesForAWarehouseHolding
 *
 * Returns the collection of traceable item balances for a warehouse holding of a product.
 */
class GetTraceableItemBalancesForAwarehouseHolding extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $warehouseHoldingId Unique Id of the warehouse holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $warehouseHoldingId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/warehouse_holdings/{$this->warehouseHoldingId}/traceable_item_balances";
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
