<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\POPPurchaseOrders\PurchaseOrder;

class GetPurchaseOrder extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    /**
     * @param int $id Unique id of the POP order.
     * @param string|null $queryParameters
     */
    public function __construct(protected int $id, string|null $queryParameters = null)
    {
        $this->endPoint = "/pop_orders/{$this->id}";
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
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
     * @return PurchaseOrder
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): PurchaseOrder
    {
        return new PurchaseOrder(...$response->json());
    }
}