<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a duplicate purchase order using the purchase order options specified.<p>This API endpoint
 * creates a draft purchase order which needs to be either:<ul><li>confirmed as a live order by using
 * the PUT pop_orders endpoint with the field 'is_editing' set to false</li><li>discarded using the
 * DELETE pop_orders endpoint</li></ul></p>
 */
class PopOrderDuplicateFlags
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $source_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $supplier_id = null,
		#[Assert\Type('bool')]
		public bool|null $prices_and_discounts = null,
	) {
	}
}
