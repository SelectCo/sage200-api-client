<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatch\GetSopconfirmDespatch;
use Selectco\SageApi\Requests\SOPSalesOrders\SopConfirmDespatch\PostSopconfirmDespatch;

class SopConfirmDespatchResource
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
	public function getSopconfirmDespatch(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopconfirmDespatch($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopconfirmDespatch(): Response
	{
		return $this->connector->send(new PostSopconfirmDespatch());
	}
}
