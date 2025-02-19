<?php

namespace Selectco\SageApi\Requests\CashBook\BankPostedTransactions;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetBankPostedTransactionsForBankAccount
 *
 * Bank posted transactions are created when transactions such as receipts or payments are posted
 * against the Cash Book.<br /><br />It is not possible to use this API resource to create posted
 * transactions. To post a transaction, the necessary API resource must be invoked.
 */
class GetBankPostedTransactionsForBankAccount extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $bankId Unique Id of the bank account.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $bankId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/banks/{$this->bankId}/bank_posted_transactions";
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
