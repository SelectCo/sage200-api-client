<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\ControlNominalCodes\GetControlNominalCode;
use Selectco\SageApi\Requests\Nominal\ControlNominalCodes\GetControlNominalCodes;

class ControlNominalCodesResource
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
	public function getControlNominalCodes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetControlNominalCodes($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the control nominal code.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getControlNominalCode(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetControlNominalCode($id, $queryParameters));
	}
}
