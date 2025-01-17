<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use JsonException;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetWarehousesForProduct
 *
 * Returns the collection of warehouses for a product.
 */
class GetWarehousesForProduct extends Request
{
	protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param mixed $productId Unique id of a product.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected string|int $productId, SageODataBuilder|null $queryParameters = null) {
        $this->endPoint = "/products/{$this->productId}/warehouses";
        $this->queryString = '';
        $this->setQueryParameters($queryParameters);
    }

    /**
     * @return string
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
