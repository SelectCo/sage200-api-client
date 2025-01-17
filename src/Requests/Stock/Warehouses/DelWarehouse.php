<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetWarehouse
 *
 * Return a single warehouse resource by supplying a warehouse Id.
 */
class DelWarehouse extends Request
{
	protected Method $method = Method::DELETE;
    private string $endPoint;

    /**
     * @param int $id Unique id of the warehouse.
     */
    public function __construct(protected int $id) {
        $this->endPoint = "/warehouses/{$this->id}";
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }
}
