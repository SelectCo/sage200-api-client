<?php

namespace Selectco\SageApi\Requests\SOPSalesOrders\SopUserPermissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Selectco\SageApi\Exception\ODataInvalidArgumentException;
use Selectco\SageApi\QueryBuilder\SageODataBuilder;

/**
 * GetSOPUserPermission
 *
 * Sales order and invoice permissions. The permissions allow user access to certain parts of a sales
 * order or invoice. Default warehouses can also be set for each different order or invoice entry type.
 */
class GetSopuserPermission extends Request
{
	protected Method $method = Method::GET;
	private string $endPoint;
	private string $queryString;


	/**
	 * @param float|int $id The user number as specified in System Administration.
	 * @param SageODataBuilder|null $queryParameters
	 * @throws ODataInvalidArgumentException
	 */
	public function __construct(
		protected float|int $id,
		?SageODataBuilder $queryParameters = null,
	) {
		$this->endPoint = "/sop_user_permissions/{$this->id}";
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
