<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierContacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * PutSupplierContactForSupplier
 *
 * Information can be stored for multiple contacts against each supplier account. Each contact can have
 * its own details such as telephone numbers, fax numbers, email address and website.
 */
class PutSupplierContactForSupplier extends Request
{
	protected Method $method = Method::PUT;
	private string $endPoint;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 * @param float|int $id Unique Id of the supplier contact.
	 */
	public function __construct(
		protected float|int $supplierId,
		protected float|int $id,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts/{$this->id}";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
