<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseAgedCreditorSummaryViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetPurchaseAgedCreditorSummaryViews
 *
 * Gets Purchase aged creditor summary views. Specifying a query parameter of '$ageingdatetype' will
 * produce values for the specified ageing type. Acceptable values are 'transactiondate', 'duedate',
 * and 'calendarmonth', to calculate aged credit by Transaction Date, Due Date, or by calendar months.
 */
class GetPurchaseAgedCreditorSummaryViews extends Request
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
		$this->endPoint = "/purchase_aged_creditor_summary_views";
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
