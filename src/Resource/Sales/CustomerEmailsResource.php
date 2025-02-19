<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerEmails\DeleteCustomerEmail;
use Selectco\SageApi\Requests\Sales\CustomerEmails\DeleteCustomerEmailForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\DeleteCustomerEmailForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmail;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmailForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmailForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmails;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmailsForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\GetCustomerEmailsForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\PostCustomerEmailForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\PostCustomerEmailForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\PutCustomerEmail;
use Selectco\SageApi\Requests\Sales\CustomerEmails\PutCustomerEmailForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerEmails\PutCustomerEmailForCustomerContact;

class CustomerEmailsResource
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
	public function getCustomerEmails(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerEmails($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerEmailsForCustomerContact(
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerEmailsForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerEmailForCustomerContact(float|int $customerContactId): Response
	{
		return $this->connector->send(new PostCustomerEmailForCustomerContact($customerContactId));
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
	public function getCustomerEmailsForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerEmailsForCustomerAndCustomerContact($customerId, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerEmailForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
	): Response
	{
		return $this->connector->send(new PostCustomerEmailForCustomerAndCustomerContact($customerId, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerEmail(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerEmail($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerEmail(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerEmail($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerEmail(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerEmail($id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerEmailForCustomerContact(
		float|int $customerContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerEmailForCustomerContact($customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerEmailForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new PutCustomerEmailForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerEmailForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerEmailForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerEmailForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerEmailForCustomerAndCustomerContact($customerId, $customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerEmailForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutCustomerEmailForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerEmailForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteCustomerEmailForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}
}
