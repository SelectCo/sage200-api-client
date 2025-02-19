<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\DeleteSalesPostedTransactionMemo;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\GetMemosForSalesPostedTransaction;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\GetSalesPostedTransactionMemo;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\GetSalesPostedTransactionMemos;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\PostSalesPostedTransactionMemo;
use Selectco\SageApi\Requests\Sales\SalesPostedTransactionMemos\PutSalesPostedTransactionMemo;

class SalesPostedTransactionMemosResource
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
	public function getSalesPostedTransactionMemos(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesPostedTransactionMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSalesPostedTransactionMemo(): Response
	{
		return $this->connector->send(new PostSalesPostedTransactionMemo());
	}


	/**
	 * @param float|int $id Unique Id of the sales posted transaction memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesPostedTransactionMemo(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesPostedTransactionMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the sales posted transaction memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSalesPostedTransactionMemo(float|int $id): Response
	{
		return $this->connector->send(new PutSalesPostedTransactionMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the sales posted transaction memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSalesPostedTransactionMemo(float|int $id): Response
	{
		return $this->connector->send(new DeleteSalesPostedTransactionMemo($id));
	}


	/**
	 * @param float|int $transactionId Unique Id of the sales posted transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getMemosForSalesPostedTransaction(
        float|int             $transactionId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetMemosForSalesPostedTransaction($transactionId, $queryParameters));
	}
}
