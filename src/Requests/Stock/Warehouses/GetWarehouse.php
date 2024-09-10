<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

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
     * @param int $id Unique Id of the warehouse.
     */
    public function __construct(protected int $id) {
        $this->endPoint = "/warehouses/{$this->id}";
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    public function setQueryParameters(string $queryParameters): void
    {
        $this->endPoint .= $queryParameters;
    }

    public function createDtoFromResponse(Response $response): Warehouse
    {
        return new Warehouse(...$response->json());
    }
}
