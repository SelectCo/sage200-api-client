<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

class GetWarehouseHoldingsForWarehouse extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param int $warehouseId Unique id of the warehouse.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected int $warehouseId, SageODataBuilder|null $queryParameters = null)
    {
        $this->endPoint = "/warehouses/{$this->warehouseId}/warehouse_holdings";
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
     * @return WarehouseHolding[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new WarehouseHolding(...$data);
        }
        return $returnArray;
    }
}