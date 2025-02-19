<?php

namespace Selectco\SageApi\Requests\Stock\BinHoldings;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetBinHoldings
 *
 * Bins allow you to specify a place in a Warehouse where stock is stored such as a shelf or aisle.
 * Every Warehouse has a single Bin created by default called 'Unspecified'. If you don't want to use
 * bins with your warehouses, all items are stored in the 'Unspecified' bin. You can rename the
 * 'Unspecified' bin to something more meaningful for your company.
 */
class GetBinHoldings extends Request
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
		$this->endPoint = "/bin_holdings";
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
