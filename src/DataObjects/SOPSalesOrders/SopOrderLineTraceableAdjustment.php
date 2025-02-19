<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A traceable adjustment describes the traceable items for a product associated with the sales order
 * line. (Sage 200 Professional only).
 */
class SopOrderLineTraceableAdjustment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $product_id = null,
		#[Assert\Type('bool')]
		public bool|null  $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public bool|null  $is_fixed_single_batch = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $fixed_single_batch_traceable_item_id = null,
		#[Assert\Type('array')]
		public array|null $traceable_adjustment_items = null,
	) {
	}
}
