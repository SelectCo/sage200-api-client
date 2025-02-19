<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\DeleteSupplierEmail;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\DeleteSupplierEmailForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\DeleteSupplierEmailForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmail;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmailForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmailForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmails;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmailsForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\GetSupplierEmailsForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\PostSupplierEmailForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\PostSupplierEmailForSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\PutSupplierEmail;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\PutSupplierEmailForSupplierAndSupplierContact;
use Selectco\SageApi\Requests\Purchases\SupplierEmails\PutSupplierEmailForSupplierContact;

class SupplierEmailsResource
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
	public function getSupplierEmails(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierEmails($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierEmailsForSupplierContact(
        float|int             $supplierContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierEmailsForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierEmailForSupplierContact(float|int $supplierContactId): Response
	{
		return $this->connector->send(new PostSupplierEmailForSupplierContact($supplierContactId));
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
	public function getSupplierEmailsForSupplierAndSupplierContact(
        float|int             $supplierId,
        float|int             $supplierContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierEmailsForSupplierAndSupplierContact($supplierId, $supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function postSupplierEmailForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
	): Response
	{
		return $this->connector->send(new PostSupplierEmailForSupplierAndSupplierContact($supplierId, $supplierContactId));
	}


	/**
	 * @param float|int $id Unique Id of the supplier email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierEmail(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierEmail($id, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierEmail(float|int $id): Response
	{
		return $this->connector->send(new PutSupplierEmail($id));
	}


	/**
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierEmail(float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierEmail($id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierEmailForSupplierContact(
        float|int             $supplierContactId,
        float|int             $id,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierEmailForSupplierContact($supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierEmailForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new PutSupplierEmailForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierEmailForSupplierContact(float|int $supplierContactId, float|int $id): Response
	{
		return $this->connector->send(new DeleteSupplierEmailForSupplierContact($supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierEmailForSupplierAndSupplierContact(
        float|int             $supplierId,
        float|int             $supplierContactId,
        float|int             $id,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierEmailForSupplierAndSupplierContact($supplierId, $supplierContactId, $id, $queryParameters));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function putSupplierEmailForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new PutSupplierEmailForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier email.
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function deleteSupplierEmailForSupplierAndSupplierContact(
		float|int $supplierId,
		float|int $supplierContactId,
		float|int $id,
	): Response
	{
		return $this->connector->send(new DeleteSupplierEmailForSupplierAndSupplierContact($supplierId, $supplierContactId, $id));
	}
}
