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
		public ?int $traceable_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $identification_no = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('bool')]
		public ?bool $is_selected = null,
		#[Assert\Type('float')]
		public ?float $original_quantity = null,
		#[Assert\Type('float')]
		public ?float $available_quantity = null,
		#[Assert\Type('float')]
		public ?float $allocation_quantity = null,
		#[Assert\Type('float')]
		public ?float $despatched_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $receipt_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $allocated_to_who_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $additional_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sell_by_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $use_by_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_bin_item_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_allocation_line_id = null,
		#[Assert\Type('float')]
		public ?float $sop_allocation_line_quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_allocation_balance_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_allocated = null,
		#[Assert\Type('bool')]
		public ?bool $is_selectable = null,
	) {
	}
}
