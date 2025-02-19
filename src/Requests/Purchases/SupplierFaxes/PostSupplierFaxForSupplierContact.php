<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierFaxes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSupplierFaxForSupplierContact
 *
 * Contact specific fax numbers can be queried, or updated in isolation, separate to the rest of the
 * supplier contact details. Calling this resource doesn't return, or update any other supplier contact
 * fields.
 */
class PostSupplierFaxForSupplierContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	/**
	 * @param float|int $supplierContactId Unique Id of the supplier contact.
	 */
	public function __construct(
		protected float|int $supplierContactId,
	) {
		$this->endPoint = "/supplier_contacts/{$this->supplierContactId}/supplier_faxes";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
