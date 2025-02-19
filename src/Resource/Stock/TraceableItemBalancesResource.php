<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\TraceableItemBalances\GetTraceableItemBalancesForAwarehouseHolding;

class TraceableItemBalancesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $warehouseHoldingId Unique Id of the warehouse holding.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getTraceableItemBalancesForAwarehouseHolding(
        float|int             $warehouseHoldingId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetTraceableItemBalancesForAwarehouseHolding($warehouseHoldingId, $queryParameters));
	}
}
