<?php

namespace Selectco\SageApi\Requests\Sales\SalesTransactionEnquiryViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSalesTransactionsEnquiryViewsForCustomer
 *
 * Sales transaction enquiry views represent sales transactions such as orders invoiced, receipts,
 * refunds or credit notes, that are posted against the Sales Ledger.
 */
class GetSalesTransactionsEnquiryViewsForCustomer extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/customers/{$this->customerId}/sales_transaction_enquiry_views";
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
