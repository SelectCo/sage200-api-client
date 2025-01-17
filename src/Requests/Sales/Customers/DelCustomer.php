<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Sales\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DelCustomer extends Request
{
    protected Method $method = Method::DELETE;

    private string $endPoint;

    /**
     * @param int $id Unique id of the customer.
     */
    public function __construct(protected int $id)
    {
        $this->endPoint = "/customers/{$this->id}";
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }
}