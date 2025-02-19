<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Stock\StocktakeApproveComplete\PostStocktakeApproveComplete;

class StocktakeApproveCompleteResource
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
	public function postStocktakeApproveComplete(): Response
	{
		return $this->connector->send(new PostStocktakeApproveComplete());
	}
}
