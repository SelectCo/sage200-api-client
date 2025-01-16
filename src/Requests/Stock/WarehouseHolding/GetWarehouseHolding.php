<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

class GetWarehouseHolding extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param int $id Unique id of the warehouse.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected int $id, SageODataBuilder|null $queryParameters = null)
    {
        $this->endPoint = "/warehouse_holdings/{$this->id}";
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
            $this->queryString = $queryParameters->buildSingleObjectQueryString();
        }
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