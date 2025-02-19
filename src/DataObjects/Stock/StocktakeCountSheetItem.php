<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stocktake count sheet items.
 */
class StocktakeCountSheetItem
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $stocktake_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $stock_unit_name = null,
		#[Assert\Type('bool')]
		public bool|null   $include_nos_on_count_sheets = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $traceable_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $costing_method_type = null,
		#[Assert\Type('float')]
		public float|null  $standard_cost = null,
		#[Assert\Type('float')]
		public float|null  $average_buying_price = null,
		#[Assert\Type('float')]
		public float|null  $recorded_quantity_in_stock = null,
		#[Assert\Type('bool')]
		public bool|null   $has_negative_quantity_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $quantity_on_pop_order = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated = null,
		#[Assert\Type('bool')]
		public bool|null   $actual_quantity_entered = null,
		#[Assert\Type('float')]
		public float|null  $actual_quantity_in_stock = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $discrepancy_status = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null $discrepancy_narrative = null,
		#[Assert\Type('bool')]
		public bool|null   $allows_negative_stock = null,
		#[Assert\Type('array')]
		public array|null  $stocktake_trace_count_sheet_items = null,
	) {
	}
}
