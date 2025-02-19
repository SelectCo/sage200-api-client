<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\DeleteSupplierFax;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\DeleteSupplierFaxForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\DeleteSupplierFaxForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFax;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFaxes;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFaxesForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFaxesForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFaxForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\GetSupplierFaxForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\PostSupplierFaxForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\PostSupplierFaxForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\PutSupplierFax;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\PutSupplierFaxForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierFaxes\PutSupplierFaxForSupplierContact;

class SupplierFaxesResource
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
	public function getSupplierFaxes(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierFaxes($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierFaxesForSupplierContact(
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierFaxesForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierFaxForSupplierContact(float|int $supplierContactId): Response
	{
		return $this->connector->send(new PostSupplierFaxForSupplierContact($supplierContactId));
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
	public function getSupplierFaxesForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierFaxesForSupplierAndSupplierContact($supplierId, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierFaxForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
	): Response
	{
		return $this->connector->send(new PostSupplierFaxForSupplierAndSupplierContact($supplierId, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierFax(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierFax($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierFax(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierFax($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierFax(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierFax($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierFaxForSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierFaxForSupplierContact($id, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierFaxForSupplierContact(float|int $id, float|int $supplierContactId): Response
	{
		return $this->connector->send(new PutSupplierFaxForSupplierContact($id, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierFaxForSupplierContact(float|int $id, float|int $supplierContactId): Response
	{
		return $this->connector->send(new DeleteSupplierFaxForSupplierContact($id, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierFaxForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierFaxForSupplierAndSupplierContact($id, $supplierContactId, $supplierId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierFaxForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
	): Response
	{
		return $this->connector->send(new PutSupplierFaxForSupplierAndSupplierContact($id, $supplierContactId, $supplierId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierFaxForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
	): Response
	{
		return $this->connector->send(new DeleteSupplierFaxForSupplierAndSupplierContact($id, $supplierContactId, $supplierId));
	}
}
