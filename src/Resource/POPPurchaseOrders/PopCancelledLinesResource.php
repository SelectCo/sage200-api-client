<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopCancelledLines\GetPopcancelledLine;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopCancelledLines\GetPopcancelledLines;

class PopCancelledLinesResource
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
	public function getPopcancelledLines(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPopcancelledLines($queryParameters));
	}


	/**
	 * @param float|int $id The purchase order return cancelled line Id.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPopcancelledLine(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPopcancelledLine($id, $queryParameters));
	}
}
