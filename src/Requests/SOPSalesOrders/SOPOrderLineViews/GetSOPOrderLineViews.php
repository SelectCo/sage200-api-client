<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\SOPSalesOrders\SOPOrderLineViews;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\SOPSalesOrders\SOPOrderLineViews;

class GetSOPOrderLineViews extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    public function __construct()
    {
        $this->endPoint = '/sop_order_line_views';
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    /**
     * @param string $queryParameters
     * @return void
     */
    public function setQueryParameters(string $queryParameters): void
    {
        $this->endPoint .= $queryParameters;
    }

    /**
     * @param Response $response
     * @return SOPOrderLineViews[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new SOPOrderLineViews(...$data);
        }
        return $returnArray;
    }
}