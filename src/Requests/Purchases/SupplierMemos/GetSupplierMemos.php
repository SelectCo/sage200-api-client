<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierMemos;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierMemos
 *
 * Memos are sections of text that can be used to make comments about a supplier account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order). These can be used to note
 * information about previous communications, or anything that should be taken into consideration when
 * contacting the supplier (e.g. there is currently a dispute over order).<br/><br/>Multiple memos can
 * be added to each account. The user that created the memo, the date it was created and last updated
 * date and time are also recorded.<br/><br/>A user can also specify if a memo is currently 'Active' or
 * 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class GetSupplierMemos extends Request
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
		$this->endPoint = "/supplier_memos";
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
}
