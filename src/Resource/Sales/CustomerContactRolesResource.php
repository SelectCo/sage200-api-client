<?php

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRole;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRoles;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRolesForCustomerContact;

class CustomerContactRolesResource
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
	public function getCustomerContactRoles(SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerContactRoles($queryParameters));
	}


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerContactRolesForCustomerContact(
        float|int             $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	): Response
	{
		return $this->connector->send(new GetCustomerContactRolesForCustomerContact($customerContactId, $queryParameters));
	}


	/**
	 * @param float|int $id Unique Id of the customer contact role.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 * @throws FatalRequestException
	 * @throws RequestException
	 * @return Response
	 */
	public function getCustomerContactRole(float|int $id, SageODataBuilder|null $queryParameters = null): Response
	{
		return $this->connector->send(new GetCustomerContactRole($id, $queryParameters));
	}
}
