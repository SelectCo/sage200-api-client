<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;

class GetWarehouseHoldingsForProductAndWarehouse extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param int $productId Unique id of the product.
     * @param int $warehouseId Unique id of the warehouse.
     * @param string|null $queryParameters
     */
    public function __construct(protected int $productId, protected int $warehouseId, string|null $queryParameters = null)
    {
        $this->endPoint = "/products/{$this->productId}/warehouses/{$this->warehouseId}/warehouse_holdings";
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