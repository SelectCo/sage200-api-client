<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\CurrencyIsoCodes\GetCurrencyIsocode;
use Selectco\SageApi\Requests\Financials\CurrencyIsoCodes\GetCurrencyIsocodes;

class CurrencyIsoCodesResource
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
	public function getCurrencyIsocodes(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCurrencyIsocodes($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the currency ISO code.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCurrencyIsocode(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCurrencyIsocode($id, $queryParameters));
	}
}
