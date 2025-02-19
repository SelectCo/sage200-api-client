<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\CompanyDetails\GetCompanyDetail;
use Selectco\SageApi\Requests\General\CompanyDetails\GetCompanyDetails;
use Selectco\SageApi\Requests\General\CompanyDetails\PutCompanyDetail;

class CompanyDetailsResource
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
	public function getCompanyDetails(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCompanyDetails($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the company details.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCompanyDetail(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCompanyDetail($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the company details.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCompanyDetail(float|int $id): Response
	{
		return $this->connector->send(new PutCompanyDetail($id));
	}
}
