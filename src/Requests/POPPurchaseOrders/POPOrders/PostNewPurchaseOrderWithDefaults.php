<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\DataObjects\POPPurchaseOrders\PurchaseOrder;

class PostNewPurchaseOrderWithDefaults extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @var string
     */
    private string $endPoint;
    /**
     * @var array|int[]
     */
    private array $data;

    /**
     * @param int $supplier_id
     */
    public function __construct(public int $supplier_id)
    {
        $this->endPoint = "/pop_orders_new";
        $this->data = ['supplier_id' => $this->supplier_id];
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    public function defaultBody(): array
    {
        return $this->data;
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