<?php

namespace Selectco\SageApi\Requests\Sales\SalesPostedTransactions;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Selectco\SageApi\DataObjects\Sales\SalesPostedTransaction;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSalesPostedTransactions
 *
 * Sales posted transactions are created when transactions, such as orders invoiced, receipts, refunds
 * or credit notes, are posted against the Sales Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked. When making larger requests for customer information, the Sales Transactions Views resource
 * can be a faster alternative to this resource.<br /><br />It is possible to use this API resource to
 * update a transaction's queried status.
 */
class GetSalesPostedTransactions extends Request
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
		$this->endPoint = "/sales_posted_transactions";
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
     * @return SalesPostedTransaction[]
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): array
    {
        $returnArray = [];
        foreach ($response->json() as $data) {
            $returnArray[] = new SalesPostedTransaction(...$data);
        }
        return $returnArray;
    }
}
