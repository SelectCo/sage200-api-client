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

    /**
     * @param string|null $queryParameters
     */
    public function __construct(string|null $queryParameters = null)
    {
        $this->endPoint = '/sop_order_line_views';
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    /**
     * @param string|null $queryParameters
     * @return void
     */
    public function setQueryParameters(string|null $queryParameters = ''): void
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