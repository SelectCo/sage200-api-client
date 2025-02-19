<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\Users\GetUser;
use Selectco\SageApi\Requests\General\Users\GetUsers;

class UsersResource
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
	public function getUsers(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetUsers($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of a user for the specified company.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getUser(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetUser($id, $queryParameters));
	}
}
