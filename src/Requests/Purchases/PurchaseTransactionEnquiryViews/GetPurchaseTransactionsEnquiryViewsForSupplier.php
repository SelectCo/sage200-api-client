<?php

namespace Selectco\SageApi\Requests\Purchases\PurchaseTransactionEnquiryViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetPurchaseTransactionsEnquiryViewsForSupplier
 *
 * Purchase transaction equiry views represent transactions posted against the Purchase Ledger, such as
 * purchases made, and any refunds or credit notes received.
 */
class GetPurchaseTransactionsEnquiryViewsForSupplier extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $supplierId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/purchase_transaction_enquiry_views";
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
