<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\Stock;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Selectco\SageApi\DataObjects\Stock\WarehouseTypes;
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
     * @return WarehouseTypes[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getWarehouses(string|null $queryParameters = ''): array
    {
        $warehouses = new GetWarehouseTypes();
        $warehouses->setQueryParameters($queryParameters);
        return $this->connector->send($warehouses)->dto();
    }
}