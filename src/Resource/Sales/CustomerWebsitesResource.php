<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\DeleteCustomerWebsite;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\DeleteCustomerWebsiteForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\DeleteCustomerWebsiteForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsite;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsiteForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsiteForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsites;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsitesForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\GetCustomerWebsitesForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\PostCustomerWebsiteForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\PostCustomerWebsiteForCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\PutCustomerWebsite;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\PutCustomerWebsiteForCustomerAndCustomerContact;
use Selectco\SageApi\Requests\Sales\CustomerWebsites\PutCustomerWebsiteForCustomerContact;

class CustomerWebsitesResource
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
	public function getCustomerWebsites(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerWebsites($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerWebsitesForCustomerContact(
		float|int $customerContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerWebsitesForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerWebsiteForCustomerContact(float|int $customerContactId): Response
	{
		return $this->connector->send(new PostCustomerWebsiteForCustomerContact($customerContactId));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerWebsitesForCustomerAndCustomerContact(
		float|int $customerContactId,
		float|int $customerId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerWebsitesForCustomerAndCustomerContact($customerContactId, $customerId, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $customerId Unique Id of the customer.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postCustomerWebsiteForCustomerAndCustomerContact(
		float|int $customerContactId,
		float|int $customerId,
	): Response
	{
		return $this->connector->send(new PostCustomerWebsiteForCustomerAndCustomerContact($customerContactId, $customerId));
	}


	/**
	 * @param float|int $id Unique Id of the customer website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerWebsite(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerWebsite($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerWebsite(float|int $id): Response
	{
		return $this->connector->send(new PutCustomerWebsite($id));
	}


	/**
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerWebsite(float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerWebsite($id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerWebsiteForCustomerContact(
		float|int $customerContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerWebsiteForCustomerContact($customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerWebsiteForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new PutCustomerWebsiteForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerWebsiteForCustomerContact(float|int $customerContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteCustomerWebsiteForCustomerContact($customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerWebsiteForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerWebsiteForCustomerAndCustomerContact($customerId, $customerContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putCustomerWebsiteForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutCustomerWebsiteForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}


	/**
	 * @param float|int $customerId Unique Id of the customer.
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param float|int $id Unique Id of the customer website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteCustomerWebsiteForCustomerAndCustomerContact(
		float|int $customerId,
		float|int $customerContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteCustomerWebsiteForCustomerAndCustomerContact($customerId, $customerContactId, $id));
	}
}
