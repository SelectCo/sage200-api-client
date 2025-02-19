<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierTelephones;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSupplierTelephoneForSupplierAndSupplierContact
 *
 * Contact specific telephone numbers can be queried, or updated in isolation, separate to the rest of
 * the supplier contact details. Calling this resource doesn't return, or update any other supplier
 * contact fields.
 */
class PutSupplierTelephoneForSupplierAndSupplierContact extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $id Unique Id of the supplier telephone.
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 * @param float|int $supplierId Unique Id of the supplier.
	 */
	public function __construct(
		protected float|int $id,
		protected float|int $supplierContactId,
		protected float|int $supplierId,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts/{$this->supplierContactId}/supplier_telephones/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
