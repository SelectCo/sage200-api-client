<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Mapping\Loader\AttributeLoader;
use Symfony\Component\Validator\Validation;

/**
 * All stock within Sage 200 regardless of type (Stock, Service/labour, or Miscellaneous), require a holding location.
 * The location indicates where an item is stored and the stock level settings for each product in the warehouse i.e.
 * the re-order level, the minimum and maximum stock levels.
 *
 * Items with a type of 'Stock' have levels recorded for each warehouse location and the levels are used when
 * allocating, issuing and receiving stock.
 */
class PostWarehouseHoldings extends Request implements HasBody
{
    use HasJsonBody;

	protected Method $method = Method::POST;
    private string $endPoint;

    /**
     * @param array $data
     */
    public function __construct(public array $data) {
        $this->endPoint = "/warehouse_holdings";
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }

    public function verifyData(): ConstraintViolationListInterface
    {
        $entity = new WarehouseHolding(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('postWarehouseHoldings')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        return $validator->validate($entity);
    }

    public function createDtoFromResponse(Response $response): WarehouseHolding
    {
        return new WarehouseHolding(...$response->json());
    }
}
