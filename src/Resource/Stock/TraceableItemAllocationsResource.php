<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\TraceableItemAllocations\GetAllocationsForTraceableBinItem;
use Selectco\SageApi\Requests\Stock\TraceableItemAllocations\GetAllocationsForTraceableItem;

class TraceableItemAllocationsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $traceableItemId Unique Id of the traceable item.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getAllocationsForTraceableItem(
        float|int             $traceableItemId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetAllocationsForTraceableItem($traceableItemId, $queryParameters));
	}


	/**
	 * @param float|int $traceableBinItemId Unique Id of the traceable bin item.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getAllocationsForTraceableBinItem(
        float|int             $traceableBinItemId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetAllocationsForTraceableBinItem($traceableBinItemId, $queryParameters));
	}
}
