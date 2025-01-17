<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;

class Nominal
{
    public function __construct(protected Connector $connector)
    {
    }
}