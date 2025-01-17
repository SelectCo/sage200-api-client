<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DelWarehouseHolding extends Request
{
    protected Method $method = Method::DELETE;
    private string $endPoint;

    /**
     * @param int $id Unique id of the warehouse holding.
     */
    public function __construct(protected int $id) {
        $this->endPoint = "/warehouse_holdings/{$this->id}";
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }
}