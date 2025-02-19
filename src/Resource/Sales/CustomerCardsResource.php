<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerCards\DeleteCustomerCard;
use Selectco\SageApi\Requests\Sales\CustomerCards\GetCustomerCard;
use Selectco\SageApi\Requests\Sales\CustomerCards\GetCustomerCards;
use Selectco\SageApi\Requests\Sales\CustomerCards\GetCustomerCardsForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerCards\PutCustomerCard;

class CustomerCardsResource
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
	public function getCustomerCards(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerCards($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer card.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerCard(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerCard($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer card.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerCard(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerCard($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer card.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerCard(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerCard($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerCardsForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerCardsForCustomer($customerId, $queryParameters));
	}
}
