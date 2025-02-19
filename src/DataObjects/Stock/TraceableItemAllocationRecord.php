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
		public ?int $traceable_bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_allocation_bal_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $allocation_balance_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $allocated_to = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $allocation_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $order_no = null,
		#[Assert\Type('float')]
		public ?float $allocated_quantity = null,
	) {
	}
}
