<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseTransactionViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetPurchaseTransactionViews
 *
 * When making larger API requests for transaction information from the Purchase ledger, the Purchase
 * Transaction Views resource can be a faster alternative to the 'Purchase Posted Transactions'
 * resource.<br /><br />The Purchase Transaction Views resource also returns a wider breadth of
 * information than the Purchase Posted Transactions. By using the Purchase Transaction Views resource,
 * the quantity of API requests can be reduced, when returning the same information from multiple API
 * resources. The default sort (orderby) field is by 'posted_supplier_transaction_id' ascending.
 */
class GetPurchaseTransactionViews extends Request
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
		$this->endPoint = "/purchase_transaction_views";
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
