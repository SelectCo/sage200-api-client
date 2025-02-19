<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalCodes\DeleteNominalCode;
use Selectco\SageApi\Requests\Nominal\NominalCodes\GetNominalCode;
use Selectco\SageApi\Requests\Nominal\NominalCodes\GetNominalCodes;
use Selectco\SageApi\Requests\Nominal\NominalCodes\PostNominalCode;
use Selectco\SageApi\Requests\Nominal\NominalCodes\PostNominalCodesNew;
use Selectco\SageApi\Requests\Nominal\NominalCodes\PutNominalCode;

class NominalCodesResource
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
	public function getNominalCodes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalCodes($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postNominalCode(): Response
	{
		return $this->connector->send(new PostNominalCode());
	}


	/**
	 * @param float|int $id Unique Id of the nominal code.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalCode(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalCode($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the nominal code.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putNominalCode(float|int $id): Response
	{
		return $this->connector->send(new PutNominalCode($id));
	}


	/**
	 * @param float|int $id Unique Id of the nominal code.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteNominalCode(float|int $id): Response
	{
		return $this->connector->send(new DeleteNominalCode($id));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postNominalCodesNew(): Response
	{
		return $this->connector->send(new PostNominalCodesNew());
	}
}
