<?php

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Stock\AutoGenerateSeparators\GetAutoGenerateSeparator;
use Selectco\SageApi\Requests\Stock\AutoGenerateSeparators\GetAutoGenerateSeparators;

class AutoGenerateSeparatorsResource
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
	public function getAutoGenerateSeparators(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetAutoGenerateSeparators($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the auto generate separator.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getAutoGenerateSeparator(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetAutoGenerateSeparator($id, $queryParameters));
	}
}
