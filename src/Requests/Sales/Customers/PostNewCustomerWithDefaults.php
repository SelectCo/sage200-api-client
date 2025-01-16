<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Sales\Customers;

use JsonException;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use Selectco\SageApi\DataObjects\Sales\Customer;
use Selectco\SageApi\Exception\DataValidationException;
use Symfony\Component\Validator\Mapping\Loader\AttributeLoader;
use Symfony\Component\Validator\Validation;

class PostNewCustomerWithDefaults extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;
    private string $endPoint;

    /**
     * @param array $data
     * @throws DataValidationException
     */
    public function __construct(public array $data)
    {
        $this->endPoint = "/customers_new";

        $this->verifyData();
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

    /**
     * @throws DataValidationException
     */
    public function verifyData(): void
    {
        $entity = new Customer(...$this->data);
        $validator = Validation::createValidatorBuilder()
            ->addMethodMapping('putNewCustomerWithDefaults')
            ->addLoader(new AttributeLoader())
            ->getValidator();

        $errors = $validator->validate($entity);

        if (count($errors) > 0)
        {
            $errorsString = (string) $errors;
            throw new DataValidationException($errorsString);
        }
    }

    /**
     * @param Response $response
     * @return Customer
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): Customer
    {
        return new Customer(...$response->json());
    }
}