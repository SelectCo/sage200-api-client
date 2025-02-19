<?php

namespace Selectco\SageApi\Requests\Sales\SalesAgedTransactionPeriodViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetAgedTransactionPeriodViews
 *
 * Gets Sales aged transaction period views. Specifying a query parameter of '$periodnumber' will
 * produce retrospective aged period values for the period specified. For example, '$periodnumber=0'
 * will produce retrospective aged values for the current period. Specifying a query parameter of
 * '$ageingdatetype' will produce values for the specified ageing type. Acceptable values are
 * 'transactiondate', 'duedate', and 'calendarmonth', to calculate aged debt by Transaction Date, Due
 * Date, or by calendar months. The default sort (orderby) field are by 'customer_id' and
 * 'ageing_period_name' descending.
 */
class GetAgedTransactionPeriodViews extends Request
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
		$this->endPoint = "/sales_aged_transaction_period_views";
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
