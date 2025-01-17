<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\SOPSalesOrders\SOPOrderLineViewsResource;

class SOPSalesOrders
{
    public function __construct(protected Connector $connector)
    {
    }

    public function sopOrderLineViews(): SOPOrderLineViewsResource
    {
        return new SOPOrderLineViewsResource($this->connector);
    }
}