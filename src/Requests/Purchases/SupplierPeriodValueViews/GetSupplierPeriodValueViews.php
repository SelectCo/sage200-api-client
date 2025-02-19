<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierPeriodValueViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierPeriodValueViews
 *
 * This resource returns supplier values (total invoices, total credit notes, total cash, etc.) for all
 * periods for all financial years held for the company. A company always has five future financial
 * years and can have unlimited previous years, depending on how long the company has been operating.
 * The default sort (orderby) field are by 'supplier_reference', 'supplier_analysis_period_id',
 * 'supplier_period_value_id' ascending.
 */
class GetSupplierPeriodValueViews extends Request
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
		$this->endPoint = "/supplier_period_value_views";
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
