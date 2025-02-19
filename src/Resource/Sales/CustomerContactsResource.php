<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerContacts\DeleteCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerContacts\DeleteCustomerContactForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerContacts\GetCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerContacts\GetCustomerContactForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerContacts\GetCustomerContacts;
use Selectco\SageApi\Requests\Sales\CustomerContacts\GetCustomerContactsForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerContacts\PostCustomerContactForCustomer;
use Selectco\SageApi\Requests\Sales\CustomerContacts\PutCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerContacts\PutCustomerContactForCustomer;

class CustomerContactsResource
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
	public function getCustomerContact(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerContact($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerContacts(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerContacts($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerContact(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerContact($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerContact(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerContact($id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerContactsForCustomer(
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerContactsForCustomer($customerId, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerContactForCustomer(float|int $customerId): Response
	{
		return $this->connector->send(new PostCustomerContactForCustomer($customerId));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $id Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerContactForCustomer(
		float|int $customerId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerContactForCustomer($customerId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $id Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerContactForCustomer(float|int $customerId, float|int $id): Response
	{
		return $this->connector->send(new PutCustomerContactForCustomer($customerId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $id Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerContactForCustomer(float|int $customerId, float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerContactForCustomer($customerId, $id));
	}
}
