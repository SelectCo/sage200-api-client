<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Stock\StocktakeViewAdjustments\PostStocktakeViewAdjustments;

class StocktakeViewAdjustmentsResource
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
	public function postStocktakeViewAdjustments(): Response
	{
		return $this->connector->send(new PostStocktakeViewAdjustments());
	}
}
