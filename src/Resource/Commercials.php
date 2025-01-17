<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;

class Commercials
{
    public function __construct(protected Connector $connector)
    {
    }
}