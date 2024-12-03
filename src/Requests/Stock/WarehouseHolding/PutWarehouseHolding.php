<?php
declare(strict_types=1);

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

class PutWarehouseHolding extends Request implements HasBody
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
        $this->endPoint = "/warehouse_holding/{$id}";
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
            ->addMethodMapping('putWarehouseHolding')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        return $validator->validate($entity);
    }

    public function createDtoFromResponse(Response $response): WarehouseHolding
    {
        return new WarehouseHolding(...$response->json());
    }
}