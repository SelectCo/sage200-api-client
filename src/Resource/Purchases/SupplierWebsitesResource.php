<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\DeleteSupplierWebsite;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\DeleteSupplierWebsiteForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\DeleteSupplierWebsiteForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsite;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsiteForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsiteForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsites;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsitesForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\GetSupplierWebsitesForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\PostSupplierWebsiteForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\PostSupplierWebsiteForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\PutSupplierWebsite;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\PutSupplierWebsiteForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierWebsites\PutSupplierWebsiteForSupplierContact;

class SupplierWebsitesResource
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
	public function getSupplierWebsites(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierWebsites($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierWebsitesForSupplierContact(
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierWebsitesForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierWebsiteForSupplierContact(float|int $supplierContactId): Response
	{
		return $this->connector->send(new PostSupplierWebsiteForSupplierContact($supplierContactId));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierWebsitesForSupplierAndSupplierContact(
		float|int $supplierContactId,
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierWebsitesForSupplierAndSupplierContact($supplierContactId, $supplierId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierWebsiteForSupplierAndSupplierContact(
		float|int $supplierContactId,
		float|int $supplierId,
	): Response
	{
		return $this->connector->send(new PostSupplierWebsiteForSupplierAndSupplierContact($supplierContactId, $supplierId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierWebsite(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierWebsite($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierWebsite(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierWebsite($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierWebsite(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierWebsite($id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierWebsiteForSupplierContact(
		float|int $supplierContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierWebsiteForSupplierContact($supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierWebsiteForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new PutSupplierWebsiteForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierWebsiteForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierWebsiteForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierWebsiteForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierWebsiteForSupplierAndSupplierContact($supplierId, $supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierWebsiteForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutSupplierWebsiteForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierWebsiteForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteSupplierWebsiteForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}
}
