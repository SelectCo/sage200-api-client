<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Http\Response;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;
use Selectco\SageApi\Requests\Financials\TraderContactRoles\GetTraderContactRole;
use Selectco\SageApi\Requests\Financials\TraderContactRoles\GetTraderContactRoles;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;

class TraderContactRolesResource
{
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrders(SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetTraderContactRoles($queryParameters));
    }

    /**
     * @param int $id
     * @param SageODataBuilder|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrder(int $id, SageODataBuilder|null $queryParameters = null): Response
    {
        return $this->connector->send(new GetTraderContactRole($id, $queryParameters));
    }
}