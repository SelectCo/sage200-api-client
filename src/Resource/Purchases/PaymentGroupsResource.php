<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\PaymentGroups\GetPaymentGroup;
use Selectco\SageApi\Requests\Purchases\PaymentGroups\GetPaymentGroups;
use Selectco\SageApi\Requests\Purchases\PaymentGroups\PutPaymentGroup;

class PaymentGroupsResource
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
	public function getPaymentGroups(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPaymentGroups($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Payment group.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getPaymentGroup(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetPaymentGroup($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the Payment group.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putPaymentGroup(float|int $id): Response
	{
		return $this->connector->send(new PutPaymentGroup($id));
	}
}
