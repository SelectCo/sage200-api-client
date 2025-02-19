<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\TraceableItemLocations\GetLocationsForTraceableItem;

class TraceableItemLocationsResource
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
	public function getLocationsForTraceableItem(
		float|int $traceableItemId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetLocationsForTraceableItem($traceableItemId, $queryParameters));
	}
}
