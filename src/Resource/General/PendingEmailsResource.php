<?php

namespace Selectco\SageApi\Resource\General;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\General\PendingEmails\DeletePendingEmail;
use Selectco\SageApi\Requests\General\PendingEmails\GetPendingEmail;
use Selectco\SageApi\Requests\General\PendingEmails\GetPendingEmails;
use Selectco\SageApi\Requests\General\PendingEmails\PostPendingEmail;
use Selectco\SageApi\Requests\General\PendingEmails\PutPendingEmail;

class PendingEmailsResource
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
	public function getPendingEmails(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPendingEmails($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postPendingEmail(): Response
	{
		return $this->connector->send(new PostPendingEmail());
	}


	/**
	 * @param float|int $id Unique Id of the pending email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPendingEmail(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetPendingEmail($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the pending email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPendingEmail(float|int $id): Response
	{
		return $this->connector->send(new PutPendingEmail($id));
	}


	/**
	 * @param float|int $id Unique Id of the pending email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deletePendingEmail(float|int $id): Response
	{
		return $this->connector->send(new DeletePendingEmail($id));
	}
}
