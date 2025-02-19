<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetWarehouseHoldings
 *
 * All stock within Sage 200 regardless of type (Stock, Service/labour, or Miscellaneous), require a
 * holding location. The location indicates where an item is stored and the stock level settings for
 * each product in the warehouse i.e. the re-order level, the minimum and maximum stock levels. <br
 * /><br />Items with a type of 'Stock' have levels recorded for each warehouse location and the levels
 * are used when allocating, issuing and receiving stock.
 */
class GetWarehouseHoldings extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(?SageODataBuilder $queryParameters = null)
	{
		$this->endPoint = "/warehouse_holdings";
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
