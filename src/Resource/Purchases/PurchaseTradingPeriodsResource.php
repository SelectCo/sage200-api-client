<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchaseTradingPeriods\GetPurchaseTradingPeriod;
use Selectco\SageApi\Requests\Purchases\PurchaseTradingPeriods\GetPurchaseTradingPeriods;

class PurchaseTradingPeriodsResource
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
	public function getPurchaseTradingPeriods(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseTradingPeriods($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the purchase trading period.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchaseTradingPeriod(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseTradingPeriod($id, $queryParameters));
	}
}
