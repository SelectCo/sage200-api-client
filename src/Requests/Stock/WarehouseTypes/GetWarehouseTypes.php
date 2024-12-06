<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseTypes;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Stock\WarehouseTypes;

class GetWarehouseTypes extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param string|null $queryParameters
     */
    public function __construct(string|null $queryParameters = null)
    {
        $this->endPoint = '/warehouse_types';
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
     * @return WarehouseTypes[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new WarehouseTypes(...$data);
        }
        return $returnArray;
    }
}