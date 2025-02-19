<?php

namespace Selectco\SageApi\Requests\Financials\DocumentTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetDocumentType
 *
 * These are the type of document used within the application. Document types can be 'Sales Order',
 * 'Sales Invoice', 'Purchase Order', 'Purchase Invoice', 'Customer Statement', 'Sales Credit Notes',
 * 'Customer Debtors Letters', 'Sales Despatch Notes', 'Sales Quotations', 'Purchase CreditNotes',
 * 'Purchase Remittance', 'Purchase Return', 'Sales Proforma', 'Draft Bill', 'Billing Invoice',
 * 'Billing Credit Note', or 'Sales Order Acknowledgement'.
 */
class GetDocumentType extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id Unique Id of the document type.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $id,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/document_types/{$this->id}";
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
