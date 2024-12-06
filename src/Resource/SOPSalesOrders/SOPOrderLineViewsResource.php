<?php
declare(strict_types=1);

namespace Selectco\SageApi\Resource\SOPSalesOrders;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Selectco\SageApi\Requests\SopSalesOrders\SOPOrderLineViews\GetSOPOrderLineViews;

class SOPOrderLineViewsResource
{
    public function __construct(protected Connector $connector)
    {
    }

    /**
     * @param string|null $queryParameters
     * @return Response
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getSOPOrderLineViews(string|null $queryParameters = ''): Response
    {
        return $this->connector->send(new GetSOPOrderLineViews($queryParameters));
    }
}