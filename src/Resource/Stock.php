<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Selectco\SageApi\Resource\Stock\WarehouseHoldingsResource;
use Selectco\SageApi\Resource\Stock\WarehousesResource;
use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Stock\WarehouseTypesResource;

class Stock
{
    public function __construct(protected Connector $connector)
    {
    }

    public function warehouseTypes(): WarehouseTypesResource
    {
        return new WarehouseTypesResource($this->connector);
    }

    public function warehouses(): WarehousesResource
    {
        return new WarehousesResource($this->connector);
    }

    public function warehouseHoldings(): WarehouseHoldingsResource
    {
        return new WarehouseHoldingsResource($this->connector);
    }
}