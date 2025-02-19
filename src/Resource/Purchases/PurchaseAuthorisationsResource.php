<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PurchaseAuthorisations\GetPurchaseAuthorisation;
use Selectco\SageApi\Requests\Purchases\PurchaseAuthorisations\PutPurchaseAuthorisation;

class PurchaseAuthorisationsResource
{
	/**
	 * @param Connector $connector
	 */
	public function __construct(
		protected Connector $connector,
	) {
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPurchaseAuthorisation(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPurchaseAuthorisation($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the transaction.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPurchaseAuthorisation(float|int $id): Response
	{
		return $this->connector->send(new PutPurchaseAuthorisation($id));
	}
}
