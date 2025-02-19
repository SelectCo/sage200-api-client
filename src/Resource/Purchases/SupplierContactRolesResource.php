<?php

namespace Selectco\SageApi\Resource\Purchases;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Purchases\SupplierContactRoles\GetSupplierContactRole;
use Selectco\SageApi\Requests\Purchases\SupplierContactRoles\GetSupplierContactRoles;
use Selectco\SageApi\Requests\Purchases\SupplierContactRoles\GetSupplierContactRolesForSupplierContact;

class SupplierContactRolesResource
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
	public function getSupplierContactRoles(?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierContactRoles($queryParameters));
	}


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierContactRolesForSupplierContact(
		float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetSupplierContactRolesForSupplierContact($supplierContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the supplier contact role.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getSupplierContactRole(float|int $id, ?SageODataBuilder $queryParameters = null): Response
	{
		return $this->connector->send(new GetSupplierContactRole($id, $queryParameters));
	}
}
