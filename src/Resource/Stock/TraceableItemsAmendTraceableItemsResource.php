<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Stock\TraceableItemsAmendTraceableItems\PostTraceableItemsAmendTraceableItems;

class TraceableItemsAmendTraceableItemsResource
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
	public function postTraceableItemsAmendTraceableItems(): Response
	{
		return $this->connector->send(new PostTraceableItemsAmendTraceableItems());
	}
}
