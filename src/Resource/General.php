<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Selectco\SageApi\Resource\General\SitesResource;
use Saloon\Http\Connector;

class General
{
    public function __construct(protected Connector $connector)
    {
    }

    public function sites(): SitesResource
    {
        return new SitesResource($this->connector);
    }
}