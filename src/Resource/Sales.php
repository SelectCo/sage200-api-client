<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource;

use Saloon\Http\Connector;
use Selectco\SageApi\Resource\Sales\SalesPostedTransactionsResource;

class Sales
{
    public function __construct(protected Connector $connector)
    {
    }

    public function salesPostedTransactions(): SalesPostedTransactionsResource
    {
        return new SalesPostedTransactionsResource($this->connector);
    }
}