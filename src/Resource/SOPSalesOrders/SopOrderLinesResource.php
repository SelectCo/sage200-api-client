<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrderLines\GetSoporderline;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrderLines\GetSoporderLineForSoporder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopOrderLines\GetSoporderLinesForSoporder;

class SopOrderLinesResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $id Unique Id of the SOP order line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSoporderline(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSoporderline($id, $queryParameters));
	}


	/**
	 * @param float|int $sopOrderId Unique Id of the SOP order.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSoporderLinesForSoporder(
        float|int             $sopOrderId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSoporderLinesForSoporder($sopOrderId, $queryParameters));
	}


	/**
	 * @param float|int $sopOrderId Unique Id of the SOP order.
	 * @param float|int $id Unique Id of the SOP order line.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSoporderLineForSoporder(
        float|int             $sopOrderId,
        float|int             $id,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSoporderLineForSoporder($sopOrderId, $id, $queryParameters));
	}
}
