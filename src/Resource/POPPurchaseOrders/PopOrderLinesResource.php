<?php

namespace Selectco\SageApi\Resource\POPPurchaseOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrderLines\GetPoporderLine;
use Selectco\SageApi\Requests\POPPurchaseOrders\PopOrderLines\GetPoporderLines;

class PopOrderLinesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $id Unique Id of the POP order line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPoporderLine(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoporderLine($id, $queryParameters));
	}


	/**
	 * @param float|int $popOrderId Unique Id of the POP order.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPoporderLines(float|int $popOrderId, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPoporderLines($popOrderId, $queryParameters));
	}
}
