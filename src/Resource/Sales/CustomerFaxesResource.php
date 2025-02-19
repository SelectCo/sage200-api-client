<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\DeleteCustomerFax;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\DeleteCustomerFaxForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\DeleteCustomerFaxForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFax;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFaxes;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFaxesForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFaxesForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFaxForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\GetCustomerFaxForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\PostCustomerFaxForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\PostCustomerFaxForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\PutCustomerFax;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\PutCustomerFaxForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerFaxes\PutCustomerFaxForCustomerContact;

class CustomerFaxesResource
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
	public function getCustomerFaxes(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerFaxes($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerFaxesForCustomerContact(
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerFaxesForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerFaxForCustomerContact(float|int $customerContactId): Response
	{
		return $this->connector->send(new PostCustomerFaxForCustomerContact($customerContactId));
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
	public function getCustomerFaxesForCustomerAndCustomerContact(
        float|int             $customerId,
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerFaxesForCustomerAndCustomerContact($customerId, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerFaxForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
	): Response
	{
		return $this->connector->send(new PostCustomerFaxForCustomerAndCustomerContact($customerId, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerFax(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerFax($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerFax(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerFax($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerFax(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerFax($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerFaxForCustomerContact(
        float|int             $id,
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerFaxForCustomerContact($id, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerFaxForCustomerContact(float|int $id, float|int $customerContactId): Response
	{
		return $this->connector->send(new PutCustomerFaxForCustomerContact($id, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerFaxForCustomerContact(float|int $id, float|int $customerContactId): Response
	{
		return $this->connector->send(new DeleteCustomerFaxForCustomerContact($id, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerFaxForCustomerAndCustomerContact(
        float|int             $id,
        float|int             $customerContactId,
        float|int             $customerId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerFaxForCustomerAndCustomerContact($id, $customerContactId, $customerId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerFaxForCustomerAndCustomerContact(
		float|int $id,
		float|int $customerContactId,
		float|int $customerId,
	): Response
	{
		return $this->connector->send(new PutCustomerFaxForCustomerAndCustomerContact($id, $customerContactId, $customerId));
	}


	/**
	 * @param float|int $id Unique Id of the customer fax.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerFaxForCustomerAndCustomerContact(
		float|int $id,
		float|int $customerContactId,
		float|int $customerId,
	): Response
	{
		return $this->connector->send(new DeleteCustomerFaxForCustomerAndCustomerContact($id, $customerContactId, $customerId));
	}
}
