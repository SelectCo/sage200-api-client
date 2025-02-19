<?php

namespace Selectco\SageApi\Resource\CashBook;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\CashBook\Banks\DeleteBank;
use Selectco\SageApi\Requests\CashBook\Banks\GetBank;
use Selectco\SageApi\Requests\CashBook\Banks\GetBanks;
use Selectco\SageApi\Requests\CashBook\Banks\PostBank;
use Selectco\SageApi\Requests\CashBook\Banks\PutBank;

class BanksResource
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
	public function getBanks(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBanks($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postBank(): Response
	{
		return $this->connector->send(new PostBank());
	}


	/**
	 * @param float|int $id Unique Id of the bank.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getBank(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetBank($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the bank.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putBank(float|int $id): Response
	{
		return $this->connector->send(new PutBank($id));
	}


	/**
	 * @param float|int $id Unique Id of the bank.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteBank(float|int $id): Response
	{
		return $this->connector->send(new DeleteBank($id));
	}
}
