<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Financials\TraderContactRolesResource;

class Financials
{
    public function __construct(protected Connector $connector)
    {
    }

    public function traderContactRoles(): TraderContactRolesResource
    {
        return new TraderContactRolesResource($this->connector);
    }
}