<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A traceable adjustment describes the traceable items for a product associated with the sales order
 * line for despatch. (Sage 200 Professional only).
 */
class SopConfirmDespatchTraceableAdjustment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null   $id = null,
		#[Assert\Type('array')]
		public array|null $bin_items = null,
		#[Assert\Type('array')]
		public array|null $traceable_adjustment_items = null,
	) {
	}
}
