<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierMobiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSupplierMobileForSupplierContact
 *
 * Contact specific mobile numbers can be queried, or updated in isolation, separate to the rest of the
 * supplier contact details. Calling this resource doesn't return, or update any other supplier contact
 * fields.
 */
class PutSupplierMobileForSupplierContact extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $id Unique Id of the supplier mobile.
	 */
	public function __construct(
		protected float|int $supplierContactId,
		protected float|int $id,
	) {
		$this->endPoint = "/supplier_contacts/{$this->supplierContactId}/supplier_mobiles/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
