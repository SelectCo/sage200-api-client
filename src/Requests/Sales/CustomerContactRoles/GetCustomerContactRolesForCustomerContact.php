<?php

namespace Selectco\SageApi\Requests\Sales\CustomerContactRoles;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetCustomerContactRolesForCustomerContact
 *
 * Customer contacts can be assigned job roles. Customer contact roles describe roles assigned to a
 * customer contact, including whether the contact is the preferred contact for the customer for a
 * role.
 */
class GetCustomerContactRolesForCustomerContact extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $customerContactId Unique Id of the customer contact.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
        protected float|int   $customerContactId,
        SageODataBuilder|null $queryParameters = null,
	) {
		$this->endPoint = "/customer_contacts/{$this->customerContactId}/customer_contact_roles";
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
