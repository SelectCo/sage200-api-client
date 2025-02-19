<?php

namespace Selectco\SageApi\Resource\Commercials;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Commercials\IntrastatDateTypes\GetIntrastatDateTypes;

class IntrastatDateTypesResource
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
	public function getIntrastatDateTypes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetIntrastatDateTypes($queryParameters));
	}
}
