<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\DeleteSupplierTelephone;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\DeleteSupplierTelephoneForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\DeleteSupplierTelephoneForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephone;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephoneForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephoneForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephones;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephonesForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\GetSupplierTelephonesForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\PostSupplierTelephoneForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\PostSupplierTelephoneForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\PutSupplierTelephone;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\PutSupplierTelephoneForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierTelephones\PutSupplierTelephoneForSupplierContact;

class SupplierTelephonesResource
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
	public function getSupplierTelephones(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierTelephones($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierTelephonesForSupplierContact(
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierTelephonesForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierTelephoneForSupplierContact(float|int $supplierContactId): Response
	{
		return $this->connector->send(new PostSupplierTelephoneForSupplierContact($supplierContactId));
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
	public function getSupplierTelephonesForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierTelephonesForSupplierAndSupplierContact($supplierId, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierTelephoneForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
	): Response
	{
		return $this->connector->send(new PostSupplierTelephoneForSupplierAndSupplierContact($supplierId, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierTelephone(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierTelephone($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierTelephone(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierTelephone($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierTelephone(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierTelephone($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierTelephoneForSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierTelephoneForSupplierContact($id, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierTelephoneForSupplierContact(float|int $id, float|int $supplierContactId): Response
	{
		return $this->connector->send(new PutSupplierTelephoneForSupplierContact($id, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierTelephoneForSupplierContact(float|int $id, float|int $supplierContactId): Response
	{
		return $this->connector->send(new DeleteSupplierTelephoneForSupplierContact($id, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierTelephoneForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierTelephoneForSupplierAndSupplierContact($id, $supplierContactId, $supplierId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierTelephoneForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
	): Response
	{
		return $this->connector->send(new PutSupplierTelephoneForSupplierAndSupplierContact($id, $supplierContactId, $supplierId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierTelephoneForSupplierAndSupplierContact(
		float|int $id,
		float|int $supplierContactId,
		float|int $supplierId,
	): Response
	{
		return $this->connector->send(new DeleteSupplierTelephoneForSupplierAndSupplierContact($id, $supplierContactId, $supplierId));
	}
}
