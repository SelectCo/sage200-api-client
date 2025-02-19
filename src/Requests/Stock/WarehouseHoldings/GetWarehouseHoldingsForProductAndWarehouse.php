<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetWarehouseHoldingsForProductAndWarehouse
 *
 * Returns collection of warehouse holdings for a product and warehouse.
 */
class GetWarehouseHoldingsForProductAndWarehouse extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $productId Unique Id of the product.
	 * @param float|int $warehouseId Unique Id of the warehouse.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $productId,
        protected float|int   $warehouseId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/products/{$this->productId}/warehouses/{$this->warehouseId}/warehouse_holdings";
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
