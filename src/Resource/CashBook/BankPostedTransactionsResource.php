<?php

namespace Selectco\SageApi\Resource\CashBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\CashBook\BankPostedTransactions\GetBankPostedTransaction;
use Selectco\SageApi\Requests\CashBook\BankPostedTransactions\GetBankPostedTransactions;
use Selectco\SageApi\Requests\CashBook\BankPostedTransactions\GetBankPostedTransactionsForBankAccount;

class BankPostedTransactionsResource
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
	public function getBankPostedTransactions(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBankPostedTransactions($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBankPostedTransaction(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBankPostedTransaction($id, $queryParameters));
	}


	/**
	 * @param float|int $bankId Unique Id of the bank account.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBankPostedTransactionsForBankAccount(
        float|int             $bankId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetBankPostedTransactionsForBankAccount($bankId, $queryParameters));
	}
}
