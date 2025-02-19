<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierWebsites;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierWebsiteForSupplierAndSupplierContact
 *
 * Contact specific websites can be queried, or updated in isolation, separate to the rest of the
 * supplier contact details. Calling this resource doesn't return, or update any other supplier contact
 * fields.
 */
class GetSupplierWebsiteForSupplierAndSupplierContact extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier website.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $supplierId,
        protected float|int   $supplierContactId,
        protected float|int   $id,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts/{$this->supplierContactId}/supplier_websites/{$this->id}";
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
