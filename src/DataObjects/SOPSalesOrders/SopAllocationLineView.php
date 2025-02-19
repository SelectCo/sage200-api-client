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
		public int|null    $sop_allocation_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_allocation_line_allocated_date = null,
		#[Assert\Type('float')]
		public float|null  $sop_allocation_line_allocated_quantity = null,
		#[Assert\Type('float')]
		public float|null  $sop_allocation_line_despatched_quantity = null,
		#[Assert\Type('float')]
		public float|null  $sop_allocation_line_current_allocated_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_allocation_line_user_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $allocation_balance_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bin_holding_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_holding_name = null,
	) {
	}
}
