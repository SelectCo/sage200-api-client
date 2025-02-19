<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesHistoricalTransactions\GetSalesHistoricalTransaction;
use Selectco\SageApi\Requests\Sales\SalesHistoricalTransactions\GetSalesHistoricalTransactions;
use Selectco\SageApi\Requests\Sales\SalesHistoricalTransactions\GetSalesHistoricalTransactionsForCustomer;

class SalesHistoricalTransactionsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesHistoricalTransactions(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesHistoricalTransactions($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesHistoricalTransaction(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesHistoricalTransaction($id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesHistoricalTransactionsForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSalesHistoricalTransactionsForCustomer($customerId, $queryParameters));
	}
}
