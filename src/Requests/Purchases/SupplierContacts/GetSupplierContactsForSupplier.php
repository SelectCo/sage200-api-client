<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierContactsForSupplier
 *
 * Information can be stored for multiple contacts against each supplier account.  Each contact can
 * have its own details such as telephone numbers, fax numbers, email address and website.
 */
class GetSupplierContactsForSupplier extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $supplierId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts";
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
