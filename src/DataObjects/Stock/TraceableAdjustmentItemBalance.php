<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns traceable item balances for a warehouse holding of a product. (Sage 200
 * Professional only).
 */
class TraceableAdjustmentItemBalance
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $identification_no = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $receipt_date = null,
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
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('float')]
		public ?float $allocated_quantity = null,
		#[Assert\Type('bool')]
		public ?bool $is_allocated = null,
	) {
	}
}
