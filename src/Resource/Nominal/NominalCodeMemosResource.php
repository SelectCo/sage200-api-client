<?php

namespace Selectco\SageApi\Resource\Nominal;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Nominal\NominalCodeMemos\DeleteNominalCodeMemo;
use Selectco\SageApi\Requests\Nominal\NominalCodeMemos\GetNominalCodeMemo;
use Selectco\SageApi\Requests\Nominal\NominalCodeMemos\GetNominalCodeMemos;
use Selectco\SageApi\Requests\Nominal\NominalCodeMemos\PostNominalCodeMemo;
use Selectco\SageApi\Requests\Nominal\NominalCodeMemos\PutNominalCodeMemo;

class NominalCodeMemosResource
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
	public function getNominalCodeMemos(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalCodeMemos($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postNominalCodeMemo(): Response
	{
		return $this->connector->send(new PostNominalCodeMemo());
	}


	/**
	 * @param float|int $id Unique Id of the nominal code memo.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getNominalCodeMemo(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetNominalCodeMemo($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the nominal code memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putNominalCodeMemo(float|int $id): Response
	{
		return $this->connector->send(new PutNominalCodeMemo($id));
	}


	/**
	 * @param float|int $id Unique Id of the nominal code memo.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteNominalCodeMemo(float|int $id): Response
	{
		return $this->connector->send(new DeleteNominalCodeMemo($id));
	}
}
