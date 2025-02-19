<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a sales order with all the default values for a customer. The API endpoint does not persist
 * the sales order.
 */
class SopOrdersNewRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
	) {
	}
}
