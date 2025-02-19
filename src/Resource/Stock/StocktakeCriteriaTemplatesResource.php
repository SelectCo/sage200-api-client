<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates\DeleteStocktakeCriteriaTemplate;
use Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates\GetStocktakeCriteriaTemplate;
use Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates\GetStocktakeCriteriaTemplates;
use Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates\PostStocktakeCriteriaTemplate;
use Selectco\SageApi\Requests\Stock\StocktakeCriteriaTemplates\PutStocktakeCriteriaTemplate;

class StocktakeCriteriaTemplatesResource
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
	public function getStocktakeCriteriaTemplates(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetStocktakeCriteriaTemplates($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postStocktakeCriteriaTemplate(): Response
	{
		return $this->connector->send(new PostStocktakeCriteriaTemplate());
	}


	/**
	 * @param float|int $id Unique Id of the stocktake criteria template.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getStocktakeCriteriaTemplate(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetStocktakeCriteriaTemplate($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the stocktake criteria template.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putStocktakeCriteriaTemplate(float|int $id): Response
	{
		return $this->connector->send(new PutStocktakeCriteriaTemplate($id));
	}


	/**
	 * @param float|int $id Unique Id of the stocktake criteria template.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteStocktakeCriteriaTemplate(float|int $id): Response
	{
		return $this->connector->send(new DeleteStocktakeCriteriaTemplate($id));
	}
}
