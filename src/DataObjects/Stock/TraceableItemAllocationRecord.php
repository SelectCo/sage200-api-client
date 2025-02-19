<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a allocation record for a product. There is no default sort (orderby). (Sage
 * 200 Professional only).
 */
class TraceableItemAllocationRecord
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_allocation_bal_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $allocation_balance_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $allocated_to = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $allocation_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $order_no = null,
		#[Assert\Type('float')]
		public float|null  $allocated_quantity = null,
	) {
	}
}
