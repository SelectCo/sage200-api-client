<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a purchase invoice with all the default values for a supplier. The API endpoint does not
 * persist the purchase invoice.
 */
class PurchaseInvoiceNewRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $supplier_id = null,
	) {
	}
}
