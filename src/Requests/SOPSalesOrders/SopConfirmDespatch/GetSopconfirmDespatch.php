<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatch;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSOPConfirmDespatch
 *
 * The confirm despatch records the despatch of goods and services from sales order lines to your
 * customers.<br/><br/>A GET request will return a collection of sales order lines available to
 * despatch and can be filtered on the following fields: confirmation_intent_type, trader_id,
 * warehouse_id, document_no and document_date.<br/><br/>In Sage 200 Professional the
 * confirmation_intent_type can be included in the query filter to determine if you are despatching
 * goods (ConfirmOnDespatch) or services (Confirm). If omitted from the query filter, this value will
 * default to ConfirmOnDespatch and return locked sales order goods to despatch.
 */
class GetSopconfirmDespatch extends Request
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
		$this->endPoint = "/sop_confirm_despatch";
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
