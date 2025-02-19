<?php

namespace Selectco\SageApi\Requests\Financials\ExchangeRateAmendabilityTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetExchangeRateAmendabilityTypes
 *
 * Exchange rate amendability types are used to allow control when and where a currency can be changed
 * within the application. Currencies can be configured as 'Not Amendable', 'Amendable - Cash Postings
 * Only', 'Amendable - All' or 'Fixed to Euro'.<P>The API endpoint returns details of the exchange rate
 * amendability types that can be used.</P>
 */
class GetExchangeRateAmendabilityTypes extends Request
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
		$this->endPoint = "/exchange_rate_amendability_types";
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
