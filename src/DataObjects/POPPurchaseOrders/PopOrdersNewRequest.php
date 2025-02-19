<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a purchase order with all the default values for a supplier. The API endpoint does not
 * persist the purchase order.
 */
class PopOrdersNewRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $supplier_id = null,
	) {
	}
}
