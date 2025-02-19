<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\CostCentres\DeleteCostCentre;
use Selectco\SageApi\Requests\Nominal\CostCentres\GetCostCentre;
use Selectco\SageApi\Requests\Nominal\CostCentres\GetCostCentres;
use Selectco\SageApi\Requests\Nominal\CostCentres\PostCostCentre;
use Selectco\SageApi\Requests\Nominal\CostCentres\PutCostCentre;
use Selectco\SageApi\Requests\Nominal\CostCentres\PutCostCentres;

class CostCentresResource
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
	public function getCostCentres(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCostCentres($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCostCentres(): Response
	{
		return $this->connector->send(new PutCostCentres());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCostCentre(): Response
	{
		return $this->connector->send(new PostCostCentre());
	}


	/**
	 * @param float|int $id Unique Id of the cost centre.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCostCentre(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCostCentre($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the cost centre.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCostCentre(float|int $id): Response
	{
		return $this->connector->send(new PutCostCentre($id));
	}


	/**
	 * @param float|int $id Unique Id of the cost centre.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCostCentre(float|int $id): Response
	{
		return $this->connector->send(new DeleteCostCentre($id));
	}
}
