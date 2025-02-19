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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $stocktake_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bin_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $bin_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $stock_unit_name = null,
		#[Assert\Type('bool')]
		public ?bool $include_nos_on_count_sheets = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $traceable_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $costing_method_type = null,
		#[Assert\Type('float')]
		public ?float $standard_cost = null,
		#[Assert\Type('float')]
		public ?float $average_buying_price = null,
		#[Assert\Type('float')]
		public ?float $recorded_quantity_in_stock = null,
		#[Assert\Type('bool')]
		public ?bool $has_negative_quantity_in_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_on_pop_order = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated = null,
		#[Assert\Type('bool')]
		public ?bool $actual_quantity_entered = null,
		#[Assert\Type('float')]
		public ?float $actual_quantity_in_stock = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $discrepancy_status = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $discrepancy_narrative = null,
		#[Assert\Type('bool')]
		public ?bool $allows_negative_stock = null,
		#[Assert\Type('array')]
		public ?array $stocktake_trace_count_sheet_items = null,
	) {
	}
}
