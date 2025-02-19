<?php

namespace Selectco\SageApi\Requests\Nominal\NominalTransactionEnquiryViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetNominalTransactionsEnquiryViewForNominal
 *
 * Nominal transaction enquiry views represent nominal transactions posted to the Nominal Ledger.
 */
class GetNominalTransactionsEnquiryViewForNominal extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $nominalCodeId Unique Id of the nominal account.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $nominalCodeId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/nominal_codes/{$this->nominalCodeId}/nominal_transaction_enquiry_views";
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
