<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\General;

use Selectco\SageApi\DataObjects\General\Sites;
use Selectco\SageApi\Requests\General\Sites\GetSites;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;

class SitesResource
{
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @return Sites[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getSites(): array
    {
        return $this->connector->send(new GetSites())->dto();
    }
}