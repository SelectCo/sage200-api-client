<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DelPurchaseOrder extends Request
{
    protected Method $method = Method::DELETE;
    private string $endPoint;

    /**
     * @param int $id Unique id of the purchase order.
     */
    public function __construct(protected int $id)
    {
        $this->endPoint = "/pop_orders/{$this->id}";
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }
}