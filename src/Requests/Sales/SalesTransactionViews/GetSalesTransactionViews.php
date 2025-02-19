<?php

namespace Selectco\SageApi\Requests\Sales\SalesTransactionViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSalesTransactionViews
 *
 * When making larger API requests for transaction information from the Sales ledger, the Sales
 * Transaction Views resource can be a faster alternative to the 'Sales Posted Transactions'
 * resource.<br /><br />The Sales Transaction Views resource also returns a wider breadth of
 * information than the Sales Posted Transactions. By using the Sales Transaction Views resource, the
 * quantity of API requests can be reduced, when returning the same information from multiple API
 * resources. The default sort (orderby) field is by 'posted_customer_transaction_id' ascending.
 */
class GetSalesTransactionViews extends Request
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
		$this->endPoint = "/sales_transaction_views";
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
