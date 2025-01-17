<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Financials;

use Saloon\Http\Response;
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
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrders(string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetTraderContactRoles($queryParameters));
    }

    /**
     * @param int $id
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getPurchaseOrder(int $id, string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetTraderContactRole($id, $queryParameters));
    }
}