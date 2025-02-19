<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalBudgetProfiles\GetNominalBudgetProfile;
use Selectco\SageApi\Requests\Nominal\NominalBudgetProfiles\GetNominalBudgetProfiles;

class NominalBudgetProfilesResource
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
	public function getNominalBudgetProfiles(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalBudgetProfiles($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the nominal budget profile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalBudgetProfile(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalBudgetProfile($id, $queryParameters));
	}
}
