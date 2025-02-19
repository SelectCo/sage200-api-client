<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\Currencies\GetCurrencies;
use Selectco\SageApi\Requests\Financials\Currencies\GetCurrency;

class CurrenciesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCurrencies(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCurrencies($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the currency.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCurrency(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCurrency($id, $queryParameters));
	}
}
