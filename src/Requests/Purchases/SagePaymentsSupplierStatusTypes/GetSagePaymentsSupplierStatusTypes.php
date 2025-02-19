<?php

namespace Selectco\SageApi\Requests\Purchases\SagePaymentsSupplierStatusTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSagePaymentsSupplierStatusTypes
 *
 * Sage Payments Supplier Status Types indicate the status of the supplier with Supplier Payments. The
 * status types are 'Not submitted to Supplier Payments', 'Queried', 'Rejected', 'Requires Approval',
 * 'Approved' and 'Requires Submission'.<P>The API endpoint returns details of the status of the
 * supplier with Supplier Payments.</P>
 */
class GetSagePaymentsSupplierStatusTypes extends Request
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
		$this->endPoint = "/sage_payments_supplier_status_types";
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
