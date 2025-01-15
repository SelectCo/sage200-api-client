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
     * @param mixed $productId Unique id of a product.
     * @param string|null $queryParameters
     */
    public function __construct(protected string|int $productId, string|null $queryParameters = null) {
        $this->endPoint = "/products/{$this->productId}/warehouses";
        $this->setQueryParameters($queryParameters);
    }

    /**
     * @return string
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
