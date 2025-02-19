<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierContactRoles;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSupplierContactRolesForSupplierContact
 *
 * Supplier contacts can be assigned job roles. Supplier contact roles describe roles assigned to a
 * supplier contact, including whether the contact is the preferred contact for the supplier for a
 * role.
 */
class GetSupplierContactRolesForSupplierContact extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $supplierContactId,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/supplier_contacts/{$this->supplierContactId}/supplier_contact_roles";
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
