<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\Stock\WarehouseTypes\GetWarehouseTypes;

class WarehouseTypesResource
{
    /**
     * @param Connector $connector
     */
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouses(string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetWarehouseTypes($queryParameters));
    }
}