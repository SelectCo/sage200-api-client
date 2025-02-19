<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Financials\CurrencyExchangeRates\PostCurrencyExchangeRates;

class CurrencyExchangeRatesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCurrencyExchangeRates(): Response
	{
		return $this->connector->send(new PostCurrencyExchangeRates());
	}
}
