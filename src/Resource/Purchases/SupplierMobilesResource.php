<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\DeleteSupplierMobile;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\DeleteSupplierMobileForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\DeleteSupplierMobileForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobile;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobileForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobileForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobiles;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobilesForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\GetSupplierMobilesForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\PostSupplierMobileForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\PostSupplierMobileForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\PutSupplierMobile;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\PutSupplierMobileForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierMobiles\PutSupplierMobileForSupplierContact;

class SupplierMobilesResource
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
	public function getSupplierMobiles(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierMobiles($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMobilesForSupplierContact(
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierMobilesForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierMobileForSupplierContact(float|int $supplierContactId): Response
	{
		return $this->connector->send(new PostSupplierMobileForSupplierContact($supplierContactId));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMobilesForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierMobilesForSupplierAndSupplierContact($supplierId, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierMobileForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
	): Response
	{
		return $this->connector->send(new PostSupplierMobileForSupplierAndSupplierContact($supplierId, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMobile(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierMobile($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierMobile(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierMobile($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierMobile(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierMobile($id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMobileForSupplierContact(
		float|int $supplierContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierMobileForSupplierContact($supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierMobileForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new PutSupplierMobileForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierMobileForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierMobileForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierMobileForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierMobileForSupplierAndSupplierContact($supplierId, $supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierMobileForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutSupplierMobileForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierMobileForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteSupplierMobileForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}
}
