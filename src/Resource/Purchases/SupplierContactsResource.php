<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\DeleteSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\DeleteSupplierContactForSupplier;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\GetSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\GetSupplierContactForSupplier;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\GetSupplierContacts;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\GetSupplierContactsForSupplier;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\PostSupplierContactForSupplier;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\PutSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierContacts\PutSupplierContactForSupplier;

class SupplierContactsResource
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
	public function getSupplierContact(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierContact($queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierContacts(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierContacts($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierContact(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierContact($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierContact(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierContact($id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierContactsForSupplier(
		float|int $supplierId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierContactsForSupplier($supplierId, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierContactForSupplier(float|int $supplierId): Response
	{
		return $this->connector->send(new PostSupplierContactForSupplier($supplierId));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $id Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierContactForSupplier(
		float|int $supplierId,
		float|int $id,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierContactForSupplier($supplierId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $id Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierContactForSupplier(float|int $supplierId, float|int $id): Response
	{
		return $this->connector->send(new PutSupplierContactForSupplier($supplierId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $id Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierContactForSupplier(float|int $supplierId, float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierContactForSupplier($supplierId, $id));
	}
}
