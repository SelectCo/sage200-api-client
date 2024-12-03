<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Mapping\Loader\AttributeLoader;
use Symfony\Component\Validator\Validation;

/**
 * GetWarehouse - Modify a warehouse for given Site and Company
 *
 * All stock within Sage 200, regardless of type (Stock, Service/labour, or Miscellaneous), requires a holding
 * location. By default, the HOME warehouse is created within Sage 200, you can then create your own warehouses.
 */
class PutWarehouse extends Request implements HasBody
{
    use HasJsonBody;

	protected Method $method = Method::PUT;
    private string $endPoint;

    /**
     * @param int $id
     * @param array $data
     */
    public function __construct(protected int $id, public array $data)
    {
        $this->endPoint = "/warehouses/{$id}";
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
        $entity = new Warehouse(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('putWarehouse')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        return $validator->validate($entity);
    }

    public function createDtoFromResponse(Response $response): Warehouse
    {
        return new Warehouse(...$response->json());
    }
}
