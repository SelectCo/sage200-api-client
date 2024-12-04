<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;

class POPPurchaseOrders
{
    public function __construct(protected Connector $connector)
    {
    }
}