<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of allocations of sales orders.
 */
class SopAllocationLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_allocation_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_allocation_line_allocated_date = null,
		#[Assert\Type('float')]
		public ?float $sop_allocation_line_allocated_quantity = null,
		#[Assert\Type('float')]
		public ?float $sop_allocation_line_despatched_quantity = null,
		#[Assert\Type('float')]
		public ?float $sop_allocation_line_current_allocated_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_allocation_line_user_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $allocation_balance_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_holding_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_holding_name = null,
	) {
	}
}
