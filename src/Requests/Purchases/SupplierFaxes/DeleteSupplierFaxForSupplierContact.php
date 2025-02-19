<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierFaxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSupplierFaxForSupplierContact
 *
 * Contact specific fax numbers can be queried, or updated in isolation, separate to the rest of the
 * supplier contact details. Calling this resource doesn't return, or update any other supplier contact
 * fields.
 */
class DeleteSupplierFaxForSupplierContact extends Request
{
	protected Method $method = Method::DELETE;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the supplier fax.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 */
	public function __construct(
		protected float|int $id,
		protected float|int $supplierContactId,
	) {
		$this->endPoint = "/supplier_contacts/{$this->supplierContactId}/supplier_faxes/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
