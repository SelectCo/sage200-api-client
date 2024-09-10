<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use JsonException;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * GetWarehousesForProduct
 *
 * Returns the collection of warehouses for a product.
 */
class GetWarehousesForProduct extends Request
{
	protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param mixed $productId Unique Id of a product.
     */
    public function __construct(protected string|int $productId) {
        $this->endPoint = "/products/{$this->productId}/warehouses";
    }

	public function resolveEndpoint(): string
	{
        return $this->endPoint;
	}

    public function setQueryParameters(string|null $queryParameters = ''): void
    {
        $this->endPoint .= $queryParameters;
    }

    /**
     * @param Response $response
     * @return Warehouse[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new Warehouse(...$data);
        }
        return $returnArray;
    }
}
