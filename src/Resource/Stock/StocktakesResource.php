<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\Stocktakes\DeleteStocktake;
use Selectco\SageApi\Requests\Stock\Stocktakes\GetStocktake;
use Selectco\SageApi\Requests\Stock\Stocktakes\GetStocktakes;
use Selectco\SageApi\Requests\Stock\Stocktakes\PostStocktake;
use Selectco\SageApi\Requests\Stock\Stocktakes\PutStocktake;

class StocktakesResource
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
	public function getStocktakes(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetStocktakes($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postStocktake(): Response
	{
		return $this->connector->send(new PostStocktake());
	}


	/**
	 * @param float|int $id Unique Id of the stocktake.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getStocktake(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetStocktake($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the stocktake.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putStocktake(float|int $id): Response
	{
		return $this->connector->send(new PutStocktake($id));
	}


	/**
	 * @param float|int $id Unique Id of the stocktake.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteStocktake(float|int $id): Response
	{
		return $this->connector->send(new DeleteStocktake($id));
	}
}
