<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\DeleteSopincoterm;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\GetSopincoterm;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\GetSopincoterms;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\PostSopincoterms;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\PutSopincoterm;
use Selectco\SageApi\Requests\SOPSalesOrders\SopIncoterms\PutSopincoterms;

class SopIncotermsResource
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
	public function getSopincoterms(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopincoterms($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopincoterms(): Response
	{
		return $this->connector->send(new PutSopincoterms());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopincoterms(): Response
	{
		return $this->connector->send(new PostSopincoterms());
	}


	/**
	 * @param float|int $id Unique Id of the SOP Incoterm.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopincoterm(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopincoterm($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the incoterm.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopincoterm(float|int $id): Response
	{
		return $this->connector->send(new PutSopincoterm($id));
	}


	/**
	 * @param float|int $id Unique Id of the SOP Incoterm.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSopincoterm(float|int $id): Response
	{
		return $this->connector->send(new DeleteSopincoterm($id));
	}
}
