<?php

namespace Selectco\SageApi\Requests\Nominal\NominalPeriodValueViews;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetNominalPeriodValueViews
 *
 * This resource returns the details of all accounting period nominal values for all financial years
 * held for the company. A company always has five future financial years and can have unlimited
 * previous years, depending on how long the company has been operating. The default sort (orderby)
 * field are by 'accounting_period_end_date', 'accounting_period_period_number' and 'nominal_code_id'
 * descending.
 */
class GetNominalPeriodValueViews extends Request
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
		$this->endPoint = "/nominal_period_value_views";
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
