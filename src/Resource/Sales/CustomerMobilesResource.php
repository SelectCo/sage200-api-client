<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\DeleteCustomerMobile;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\DeleteCustomerMobileForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\DeleteCustomerMobileForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobile;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobileForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobileForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobiles;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobilesForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\GetCustomerMobilesForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\PostCustomerMobileForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\PostCustomerMobileForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\PutCustomerMobile;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\PutCustomerMobileForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerMobiles\PutCustomerMobileForCustomerContact;

class CustomerMobilesResource
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
	public function getCustomerMobiles(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerMobiles($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMobilesForCustomerContact(
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerMobilesForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerMobileForCustomerContact(float|int $customerContactId): Response
	{
		return $this->connector->send(new PostCustomerMobileForCustomerContact($customerContactId));
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
	public function getCustomerMobilesForCustomerAndCustomerContact(
        float|int             $customerId,
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerMobilesForCustomerAndCustomerContact($customerId, $customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerMobileForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
	): Response
	{
		return $this->connector->send(new PostCustomerMobileForCustomerAndCustomerContact($customerId, $customerContactId));
	}


	/**
	 * @param float|int $id Unique Id of the customer mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMobile(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerMobile($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerMobile(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerMobile($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerMobile(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerMobile($id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMobileForCustomerContact(
        float|int             $customerContactId,
        float|int             $id,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerMobileForCustomerContact($customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerMobileForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new PutCustomerMobileForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerMobileForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerMobileForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerMobileForCustomerAndCustomerContact(
        float|int             $customerId,
        float|int             $customerContactId,
        float|int             $id,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerMobileForCustomerAndCustomerContact($customerId, $customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerMobileForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutCustomerMobileForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerMobileForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteCustomerMobileForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}
}
