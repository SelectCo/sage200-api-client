<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\SalesTradingPeriods\GetSalesTradingPeriod;
use Selectco\SageApi\Requests\Sales\SalesTradingPeriods\GetSalesTradingPeriods;

class SalesTradingPeriodsResource
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
	public function getSalesTradingPeriods(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesTradingPeriods($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the sales trading period.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSalesTradingPeriod(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSalesTradingPeriod($id, $queryParameters));
	}
}
