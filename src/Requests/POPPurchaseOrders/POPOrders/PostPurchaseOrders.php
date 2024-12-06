<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\POPPurchaseOrders\POPOrders;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\DataObjects\POPPurchaseOrders\PurchaseOrder;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Mapping\Loader\AttributeLoader;
use Symfony\Component\Validator\Validation;

class PostPurchaseOrders extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;
    private string $endPoint;

    /**
     * @param array $data
     */
    public function __construct(public array $data)
    {
        $this->endPoint = "/pop_orders";
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

    public function verifyData(): ConstraintViolationListInterface
    {
        $entity = new PurchaseOrder(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('postPurchaseOrders')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        return $validator->validate($entity);
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