<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierTelephones;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierTelephonesForSupplierAndSupplierContact
 *
 * Contact specific telephone numbers can be queried, or updated in isolation, separate to the rest of
 * the supplier contact details. Calling this resource doesn't return, or update any other supplier
 * contact fields.
 */
class GetSupplierTelephonesForSupplierAndSupplierContact extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $supplierId,
		protected float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts/{$this->supplierContactId}/supplier_telephones";
		$this->queryString = '';
		$this->setQueryParameters($queryParameters);
	}


	/**
	 * @param SageODataBuilder|null $queryParameters
	 * @return void
	 * @throws ODataInvalidArgumentException
	 */
	public function setQueryParameters(?SageODataBuilder $queryParameters = null): void
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
