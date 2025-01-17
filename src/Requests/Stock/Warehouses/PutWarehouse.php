<?php

namespace Selectco\SageApi\Requests\Stock\Warehouses;

use Selectco\SageApi\DataObjects\Stock\Warehouse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\Exception\DataValidationException;
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
     * @throws DataValidationException
     */
    public function __construct(protected int $id, public array $data)
    {
        $this->endPoint = "/warehouses/{$id}";

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
        $entity = new Warehouse(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('putWarehouse')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        $errors = $validator->validate($entity);

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }
    }

    public function createDtoFromResponse(Response $response): Warehouse
    {
        return new Warehouse(...$response->json());
    }
}
