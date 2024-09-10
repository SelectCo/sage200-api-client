<?php
declare(strict_types=1);

namespace Selectco\SageApi\Requests\General\Sites;

use JsonException;
use Selectco\SageApi\DataObjects\General\Sites;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * GetSites
 *
 * Access to Sage 200 sites is restricted by a Sage account. When invoking any API resource, the site Id must always be
 * specified within the header 'X-Site'.
 *
 * Use this API endpoint to return the list of sites that a user has access to. This operation is particularly
 * important during the initial stages of API development.
 */
class GetSites extends Request
{
    protected Method $method = Method::GET;
    private string $endPoint;

    public function __construct()
    {
        $this->endPoint = '/sites';
    }

    public function resolveEndpoint(): string
    {
        return $this->endPoint;
    }

    /**
     * @param Response $response
     * @return Sites[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new Sites(...$data);
        }
        return $returnArray;
    }
}