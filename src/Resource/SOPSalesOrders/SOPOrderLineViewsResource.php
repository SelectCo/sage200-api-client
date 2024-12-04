<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Selectco\SageApi\DataObjects\SOPSalesOrders\SOPOrderLineViews;
use Selectco\SageApi\Requests\SopSalesOrders\SOPOrderLineViews\GetSOPOrderLineViews;

class SOPOrderLineViewsResource
{
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @return SOPOrderLineViews[]
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getSOPOrderLineViews(): array
    {
        return $this->connector->send(new GetSOPOrderLineViews())->dto();
    }
}