<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\Financials\TraderContactRoles;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Financials\TraderContactRole;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

class GetTraderContactRole extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;
    private string $queryString;

    /**
     * @param int $id Unique id of the POP order.
     * @param SageODataBuilder|null $queryParameters
     */
    public function __construct(protected int $id, SageODataBuilder|null $queryParameters = null)
    {
        $this->endPoint = "/trader_contact_roles/{$this->id}";
        $this->queryString = '';
        $this->setQueryParameters($queryParameters);
    }

    /**
     * Define the endpoint for the request.
     */
    public function resolveEndpoint(): string
    {
        return $this->endPoint . $this->queryString;
    }

    /**
     * @param SageODataBuilder|null $queryParameters
     * @return void
     */
    public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
    {
        if ($queryParameters) {
            $this->queryString = $queryParameters->buildSingleObjectQueryString();
        }
    }

    /**
     * @param Response $response
     * @return TraderContactRole
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): TraderContactRole
    {
        return new TraderContactRole(...$response->json());
    }
}