<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a duplicate sales order using the sales order options specified.<p>This API endpoint creates
 * a draft sales order which needs to be either:<ul><li>confirmed as a live order by using the PUT
 * sop_orders endpoint with the field 'is_editing' set to false</li><li>discarded using the DELETE
 * sop_orders endpoint</li></ul></p>
 */
class SopOrderDuplicateFlags
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $source_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $customer_id = null,
		#[Assert\Type('bool')]
		public bool|null $prices_and_discounts = null,
	) {
	}
}
