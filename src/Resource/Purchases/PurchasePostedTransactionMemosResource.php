<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\DeletePurchasePostedTransactionMemo;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\GetMemosForPurchasePostedTransaction;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\GetPurchasePostedTransactionMemo;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\GetPurchasePostedTransactionMemos;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\PostPurchasePostedTransactionMemo;
use Selectco\SageApi\Requests\Purchases\PurchasePostedTransactionMemos\PutPurchasePostedTransactionMemo;

class PurchasePostedTransactionMemosResource
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
	public function getPurchasePostedTransactionMemos(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchasePostedTransactionMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPurchasePostedTransactionMemo(): Response
	{
		return $this->connector->send(new PostPurchasePostedTransactionMemo());
	}


	/**
	 * @param float|int $id Unique Id of the purchase posted transaction memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchasePostedTransactionMemo(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchasePostedTransactionMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the purchase posted transaction memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPurchasePostedTransactionMemo(float|int $id): Response
	{
		return $this->connector->send(new PutPurchasePostedTransactionMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the purchase posted transaction memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deletePurchasePostedTransactionMemo(float|int $id): Response
	{
		return $this->connector->send(new DeletePurchasePostedTransactionMemo($id));
	}


	/**
	 * @param float|int $transactionId Unique Id of the purchase posted transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getMemosForPurchasePostedTransaction(
        float|int             $transactionId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetMemosForPurchasePostedTransaction($transactionId, $queryParameters));
	}
}
