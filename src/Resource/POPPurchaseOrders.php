<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\POPPurchaseOrders\POPOrdersResource;

class POPPurchaseOrders
{
    public function __construct(protected Connector $connector)
    {
    }

    public function popOrders(): POPOrdersResource
    {
        return new POPOrdersResource($this->connector);
    }
}