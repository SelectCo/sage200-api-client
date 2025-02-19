<?php

namespace Selectco\SageApi\Requests\Financials\FinancialReportRowLayoutDebitOrCreditTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetFinancialReportRowLayoutDebitOrCreditTypes
 *
 * Financial statement layouts are designed to provide a clear representation of your accounts. Each
 * row in a financial layout can have an associated debit or credit 'type'. This list of available
 * types is predefined by the system.</P><P>The API endpoint returns details of financial report row
 * layout debit or credit types that can be used.
 */
class GetFinancialReportRowLayoutDebitOrCreditTypes extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(SageODataBuilder|null $queryParameters = null)
	{
		$this->endPoint = "/financial_report_row_layout_debit_or_credit_types";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
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
