<?php

namespace Selectco\SageApi\Requests\Purchases\SupplierContacts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PostSupplierContactForSupplier
 *
 * Information can be stored for multiple contacts against each supplier account. Each contact can have
 * its own details such as telephone numbers, fax numbers, email address and website.
 */
class PostSupplierContactForSupplier extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;
	private string $endPoint;


	/**
	 * @param float|int $supplierId Unique Id of the supplier.
	 */
	public function __construct(
		protected float|int $supplierId,
	) {
		$this->endPoint = "/suppliers/{$this->supplierId}/supplier_contacts";
	}


	/**
	 * Define the endpoint for the request.
	 */
	public function resolveEndpoint(): string
	{
		return $this->endPoint;
	}
}
