<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use JsonException;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * GetWarehouse
 *
 * Return a single warehouse resource by supplying a warehouse Id.
 */
class GetWarehouse extends Request
{
	protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param int $id Unique id of the warehouse.
     * @param string|null $queryParameters
     */
    public function __construct(protected int $id, string|null $queryParameters = null) {
        $this->endPoint = "/warehouses/{$this->id}";
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
     * @return Warehouse
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): Warehouse
    {
        return new Warehouse(...$response->json());
    }
}
