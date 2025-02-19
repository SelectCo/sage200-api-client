<?php

namespace Selectco\SageApi\Resource\PriceBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\PriceBook\CustomerPriceBands\GetCustomerPriceBand;
use Selectco\SageApi\Requests\PriceBook\CustomerPriceBands\GetCustomerPriceBands;

class CustomerPriceBandsResource
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
	public function getCustomerPriceBands(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerPriceBands($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer price band.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerPriceBand(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerPriceBand($id, $queryParameters));
	}
}
