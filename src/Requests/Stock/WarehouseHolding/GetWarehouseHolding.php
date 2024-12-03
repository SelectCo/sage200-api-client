<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;

class GetWarehouseHolding extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param int $id Unique id of the warehouse.
     */
    public function __construct(protected int $id)
    {
        $this->endPoint = "/warehouse_holdings/{$this->id}";
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    /**
     * @param string $queryParameters
     * @return void
     */
    public function setQueryParameters(string $queryParameters): void
    {
        $this->endPoint .= $queryParameters;
    }

    /**
     * @param Response $response
     * @return WarehouseHolding
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): WarehouseHolding
    {
        return new WarehouseHolding(...$response->json());
    }
}