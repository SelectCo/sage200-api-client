<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactions\GetPurchasePostedTransaction;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactions\GetPurchasePostedTransactions;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactions\GetPurchasePostedTransactionsForSupplier;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactions\PutPurchasePostedTransaction;

class PurchasePostedTransactionsResource
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
	public function getPurchasePostedTransactions(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchasePostedTransactions($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchasePostedTransaction(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchasePostedTransaction($id, $queryParameters));
	}


	/**
	 * @param float|int $id The unique Id of the purchase posted transaction.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPurchasePostedTransaction(float|int $id): Response
	{
		return $this->connector->send(new PutPurchasePostedTransaction($id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchasePostedTransactionsForSupplier(
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetPurchasePostedTransactionsForSupplier($supplierId, $queryParameters));
	}
}
