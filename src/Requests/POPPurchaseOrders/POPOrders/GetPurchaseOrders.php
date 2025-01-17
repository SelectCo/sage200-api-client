<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\POPPurchaseOrders\PurchaseOrder;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

class GetPurchaseOrders extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(SageODataBuilder|null $queryParameters = null)
    {
        $this->endPoint = "/pop_orders";
        $this->queryString = '';
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint . $this->queryString;
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return void
     */
    public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
    {
        if ($queryParameters) {
            $this->queryString = $queryParameters->buildQueryString();
        }
    }

    /**
     * @param Response $response
     * @return PurchaseOrder[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new PurchaseOrder(...$data);
        }
        return $returnArray;
    }
}