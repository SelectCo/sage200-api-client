<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\Couriers\DeleteCourier;
use Selectco\SageApi\Requests\General\Couriers\GetCourier;
use Selectco\SageApi\Requests\General\Couriers\GetCouriers;
use Selectco\SageApi\Requests\General\Couriers\PostCouriers;
use Selectco\SageApi\Requests\General\Couriers\PutCourier;
use Selectco\SageApi\Requests\General\Couriers\PutCouriers;

class CouriersResource
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
	public function getCouriers(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCouriers($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCouriers(): Response
	{
		return $this->connector->send(new PutCouriers());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCouriers(): Response
	{
		return $this->connector->send(new PostCouriers());
	}


	/**
	 * @param float|int $id Unique Id of the courier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCourier(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCourier($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the courier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCourier(float|int $id): Response
	{
		return $this->connector->send(new PutCourier($id));
	}


	/**
	 * @param float|int $id Unique Id of the courier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCourier(float|int $id): Response
	{
		return $this->connector->send(new DeleteCourier($id));
	}
}
