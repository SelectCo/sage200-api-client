<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\DeleteCustomerDeliveryAddress;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\GetCustomerDeliveryAddress;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\GetCustomerDeliveryAddresses;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\GetCustomerDeliveryAddressesForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\PostCustomerDeliveryAddress;
use Selectco\SageApi\Requests\Sales\CustomerDeliveryAddresses\PutCustomerDeliveryAddress;

class CustomerDeliveryAddressesResource
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
	public function getCustomerDeliveryAddresses(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerDeliveryAddresses($queryParameters));
	}


	/**
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerDeliveryAddress(): Response
	{
		return $this->connector->send(new PostCustomerDeliveryAddress());
	}


	/**
	 * @param float|int $id Unique Id of the customer delivery address
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerDeliveryAddress(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerDeliveryAddress($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer delivery address.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerDeliveryAddress(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerDeliveryAddress($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer delivery address.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerDeliveryAddress(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerDeliveryAddress($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerDeliveryAddressesForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerDeliveryAddressesForCustomer($customerId, $queryParameters));
	}
}
