<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetWarehouseHolding
 *
 * Return a single warehouse holding resource by supplying a warehouse holding Id.
 */
class GetWarehouseHolding extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id Unique Id of the warehouse holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $id,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/warehouse_holdings/{$this->id}";
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
