<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\DeleteSopexportReason;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\GetSopexportReason;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\GetSopexportReasons;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\PostSopexportReasons;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\PutSopexportReason;
use Selectco\SageApi\Requests\SOPSalesOrders\SopExportReasons\PutSopexportReasons;

class SopExportReasonsResource
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
	public function getSopexportReasons(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopexportReasons($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopexportReasons(): Response
	{
		return $this->connector->send(new PutSopexportReasons());
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSopexportReasons(): Response
	{
		return $this->connector->send(new PostSopexportReasons());
	}


	/**
	 * @param float|int $id Unique Id of the SOP reason For export.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopexportReason(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopexportReason($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the export reason.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSopexportReason(float|int $id): Response
	{
		return $this->connector->send(new PutSopexportReason($id));
	}


	/**
	 * @param float|int $id Unique Id of the SOP reason for export.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSopexportReason(float|int $id): Response
	{
		return $this->connector->send(new DeleteSopexportReason($id));
	}
}
