<?php

namespace Selectco\SageApi\Requests\Stock\FulfilmentSequenceTypes;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetFulfilmentSequenceTypes
 *
 * Fulfilment sequence types are the sequence options for the fulfilment methods used for product
 * allocation which determines how products are allocated to sales orders within the application.
 * Products can sequenced by 'Bin Priority', 'Smallest Quantity First', 'Largest Quantity First',
 * 'Oldest Sell By Date', 'Oldest Use By Date' or 'FIFO'.<P>The API endpoint returns details of the
 * fulfilment sequence types that can be used.</P>
 */
class GetFulfilmentSequenceTypes extends Request
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
		$this->endPoint = "/fulfilment_sequence_types";
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
