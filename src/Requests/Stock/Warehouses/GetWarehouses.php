<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use JsonException;
use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * GetWarehouses - Lists all warehouses for given Site and Company
 *
 * All stock within Sage 200, regardless of type (Stock, Service/labour, or Miscellaneous), requires a holding
 * location. By default, the HOME warehouse is created within Sage 200, you can then create your own warehouses.
 */
class GetWarehouses extends Request
{
	protected Method $method = Method::GET;
    private string $endPoint;

    public function __construct()
    {
        $this->endPoint = '/warehouses';
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
