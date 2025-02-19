<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A traceable adjustment item describes the traceable items for a product associated with the sales
 * order line. (Sage 200 Professional only).
 */
class SopItemTraceableAdjustmentItem
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $identification_no = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $is_selected = null,
		#[Assert\Type('float')]
		public float|null  $original_quantity = null,
		#[Assert\Type('float')]
		public float|null  $available_quantity = null,
		#[Assert\Type('float')]
		public float|null  $allocation_quantity = null,
		#[Assert\Type('float')]
		public float|null  $despatched_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $receipt_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $allocated_to_who_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $additional_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sell_by_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $use_by_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_bin_item_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_allocation_line_id = null,
		#[Assert\Type('float')]
		public float|null  $sop_allocation_line_quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_allocation_balance_id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_allocated = null,
		#[Assert\Type('bool')]
		public bool|null   $is_selectable = null,
	) {
	}
}
