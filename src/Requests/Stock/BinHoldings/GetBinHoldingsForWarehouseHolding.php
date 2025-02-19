<?php

namespace Selectco\SageApi\Requests\Stock\BinHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetBinHoldingsForWarehouseHolding
 *
 * Returns collection of bin holdings for warehouse holding.
 */
class GetBinHoldingsForWarehouseHolding extends Request
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
        protected float|int   $warehouseHoldingId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/warehouse_holdings/{$this->warehouseHoldingId}/bin_holdings";
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
