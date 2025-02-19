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
		public int|null    $traceable_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $identification_no = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $receipt_date = null,
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
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('float')]
		public float|null  $allocated_quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $is_allocated = null,
	) {
	}
}
