<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Sales;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRole;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRoles;
use Selectco\SageApi\Requests\Sales\CustomerContactRoles\GetCustomerContactRolesByContact;

class CustomerContactRolesResource
{
    /**
     * @param Connector $connector
     */
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getCustomerContactRoles(SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetCustomerContactRoles($queryParameters));
    }

    /**
     * @param int $id
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getCustomerContactRole(int $id, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetCustomerContactRole($id, $queryParameters));
    }

    /**
     * @param int $id
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getCustomerContactRolesByContact(int $id, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetCustomerContactRolesByContact($id, $queryParameters));
    }
}