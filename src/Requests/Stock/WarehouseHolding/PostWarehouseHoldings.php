<?php

namespace Selectco\SageApi\Requests\Stock\WarehouseHolding;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\DataObjects\Stock\WarehouseHolding;
use Selectco\SageApi\Exception\DataValidationException;
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
     * @throws DataValidationException
     */
    public function __construct(public array $data) {
        $this->endPoint = "/warehouse_holdings";

        $this->verifyData();
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }

    /**
     * @throws DataValidationException
     */
    public function verifyData(): void
    {
        $entity = new WarehouseHolding(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('postWarehouseHoldings')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        $errors = $validator->validate($entity);

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }
    }

    public function createDtoFromResponse(Response $response): WarehouseHolding
    {
        return new WarehouseHolding(...$response->json());
    }
}
