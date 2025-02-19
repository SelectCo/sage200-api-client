<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopRequisitionFulfilmentLines\GetPoprequisitionFulfilmentLine;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopRequisitionFulfilmentLines\GetPoprequisitionFulfilmentLines;

class PopRequisitionFulfilmentLinesResource
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
	public function getPoprequisitionFulfilmentLines(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoprequisitionFulfilmentLines($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the POP requisition fulfilment line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPoprequisitionFulfilmentLine(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoprequisitionFulfilmentLine($id, $queryParameters));
	}
}
