<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\DeleteCustomerTelephone;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\DeleteCustomerTelephoneForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\DeleteCustomerTelephoneForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephone;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephoneForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephoneForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephones;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephonesForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\GetCustomerTelephonesForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\PostCustomerTelephoneForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\PostCustomerTelephoneForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\PutCustomerTelephone;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\PutCustomerTelephoneForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerTelephones\PutCustomerTelephoneForCustomerContact;

class CustomerTelephonesResource
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
	public function getCustomerTelephones(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerTelephones($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerTelephonesForCustomerContact(
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerTelephonesForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerTelephoneForCustomerContact(float|int $customerContactId): Response
	{
		return $this->connector->send(new PostCustomerTelephoneForCustomerContact($customerContactId));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerTelephonesForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerTelephonesForCustomerAndCustomerContact($customerId, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerTelephoneForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
	): Response
	{
		return $this->connector->send(new PostCustomerTelephoneForCustomerAndCustomerContact($customerId, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerTelephone(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerTelephone($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerTelephone(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerTelephone($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerTelephone(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerTelephone($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerTelephoneForCustomerContact(
		float|int $id,
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerTelephoneForCustomerContact($id, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerTelephoneForCustomerContact(float|int $id, float|int $customerContactId): Response
	{
		return $this->connector->send(new PutCustomerTelephoneForCustomerContact($id, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerTelephoneForCustomerContact(float|int $id, float|int $customerContactId): Response
	{
		return $this->connector->send(new DeleteCustomerTelephoneForCustomerContact($id, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerTelephoneForCustomerAndCustomerContact(
		float|int $id,
		float|int $customerContactId,
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerTelephoneForCustomerAndCustomerContact($id, $customerContactId, $customerId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerTelephoneForCustomerAndCustomerContact(
		float|int $id,
		float|int $customerContactId,
		float|int $customerId,
	): Response
	{
		return $this->connector->send(new PutCustomerTelephoneForCustomerAndCustomerContact($id, $customerContactId, $customerId));
	}


	/**
	 * @param float|int $id Unique Id of the customer telephone.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerTelephoneForCustomerAndCustomerContact(
		float|int $id,
		float|int $customerContactId,
		float|int $customerId,
	): Response
	{
		return $this->connector->send(new DeleteCustomerTelephoneForCustomerAndCustomerContact($id, $customerContactId, $customerId));
	}
}
