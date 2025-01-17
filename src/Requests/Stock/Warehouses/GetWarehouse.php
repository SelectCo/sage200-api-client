<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use JsonException;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetWarehouse
 *
 * Return a single warehouse resource by supplying a warehouse Id.
 */
class GetWarehouse extends Request
{
	protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param int $id Unique id of the warehouse.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected int $id, SageODataBuilder|null $queryParameters = null) {
        $this->endPoint = "/warehouses/{$this->id}";
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
            $this->queryString = $queryParameters->buildSingleObjectQueryString();
        }
    }

    /**
     * @param Response $response
     * @return Warehouse
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): Warehouse
    {
        return new Warehouse(...$response->json());
    }
}
