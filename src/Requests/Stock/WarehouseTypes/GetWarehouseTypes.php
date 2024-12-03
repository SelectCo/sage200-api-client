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

    public function __construct()
    {
        $this->endPoint = '/warehouse_types';
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    public function setQueryParameters(string $queryParameters): void
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