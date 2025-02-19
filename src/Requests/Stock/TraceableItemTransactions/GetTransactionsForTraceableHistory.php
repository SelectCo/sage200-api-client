<?php

namespace Selectco\SageApi\Requests\Stock\TraceableItemTransactions;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetTransactionsForTraceableHistory
 *
 * Returns the collection of traceable item details for a product traceable history record. (Sage 200
 * Professional only).
 */
class GetTransactionsForTraceableHistory extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $traceableHistoryId Unique Id of the product traceable history record.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $traceableHistoryId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/product_transactions/{$this->traceableHistoryId}/traceable_item_transactions";
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
