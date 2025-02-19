<?php

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\TraderContactRoles\GetTraderContactRole;
use Selectco\SageApi\Requests\Financials\TraderContactRoles\GetTraderContactRoles;

class TraderContactRolesResource
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
	public function getTraderContactRoles(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetTraderContactRoles($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the trader contact role.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getTraderContactRole(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetTraderContactRole($id, $queryParameters));
	}
}
