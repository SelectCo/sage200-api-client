<?php

namespace Selectco\SageApi\Requests\General\CompanyDetails;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\General\CompanyDetails;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetCompanyDetails
 *
 * Every instance of Sage 200 is configured for the company using it. A company is identified in Sage
 * 200 by its name. Sage 200 stores separate company details for each company that is created.<P>The
 * information stored within company details is typical company information such as VAT registration
 * number and company contact details.</P>
 */
class GetCompanyDetails extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(SageODataBuilder|null $queryParameters = null)
	{
		$this->endPoint = "/company_details";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(SageODataBuilder|null $queryParameters = null): void
	{
		if ($queryParameters) {
		    $this->queryString = $queryParameters->buildQueryString();
		}
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint . $this->queryString;
	}


    /**
     * @param Response $response
     * @return CompanyDetails[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new CompanyDetails(...$data);
        }
        return $returnArray;
    }
}
