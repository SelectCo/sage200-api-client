<?php

namespace Selectco\SageApi\Resource\PriceBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\PriceBook\PriceBands\GetPriceBand;
use Selectco\SageApi\Requests\PriceBook\PriceBands\GetPriceBands;

class PriceBandsResource
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
	public function getPriceBands(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPriceBands($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the price band.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPriceBand(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPriceBand($id, $queryParameters));
	}
}
