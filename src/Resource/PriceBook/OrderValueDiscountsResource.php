<?php

namespace Selectco\SageApi\Resource\PriceBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\PriceBook\OrderValueDiscounts\GetOrderValueDiscount;
use Selectco\SageApi\Requests\PriceBook\OrderValueDiscounts\GetOrderValueDiscounts;

class OrderValueDiscountsResource
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
	public function getOrderValueDiscounts(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetOrderValueDiscounts($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the order value discount.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getOrderValueDiscount(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetOrderValueDiscount($id, $queryParameters));
	}
}
