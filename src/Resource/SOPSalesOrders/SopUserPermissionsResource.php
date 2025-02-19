<?php

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\SOPSalesOrders\SopUserPermissions\GetSopuserPermission;
use Selectco\SageApi\Requests\SOPSalesOrders\SopUserPermissions\GetSopuserPermissions;

class SopUserPermissionsResource
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
	public function getSopuserPermissions(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopuserPermissions($queryParameters));
	}


	/**
	 * @param float|int $id The user number as specified in System Administration.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSopuserPermission(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSopuserPermission($id, $queryParameters));
	}
}
