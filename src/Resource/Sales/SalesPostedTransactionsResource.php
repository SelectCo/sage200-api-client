<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransaction;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransactions;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\GetSalesPostedTransactionsForCustomer;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactions\PutSalesPostedTransactions;

class SalesPostedTransactionsResource
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
	public function getSalesPostedTransactions(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesPostedTransactions($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesPostedTransaction(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesPostedTransaction($id, $queryParameters));
	}


	/**
	 * @param float|int $id The unique Id of the sales posted transaction.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSalesPostedTransactions(float|int $id): Response
	{
		return $this->connector->send(new PutSalesPostedTransactions($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesPostedTransactionsForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSalesPostedTransactionsForCustomer($customerId, $queryParameters));
	}
}
