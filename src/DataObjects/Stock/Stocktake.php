<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stocktakes adjust the recorded stock levels in Sage 200 with actual stock levels in order to
 * maintain accurate stock records. Stocktakes are recorded per warehouse. Items for a stocktake can be
 * selected individually (by Stock Item) or by the bin they are stored in.
 */
class Stocktake
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $stocktake_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $stocktake_date = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $stocktake_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $stocktake_status = null,
		#[Assert\Type('bool')]
		public bool|null   $exclude_inactive_stock = null,
		#[Assert\Type('bool')]
		public bool|null   $show_expected_quantities = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $stock_variance_nominal_code_id = null,
		#[Assert\Type('object')]
		public object|null $stock_variance_nominal_code = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null $nominal_narrative = null,
		#[Assert\Type('bool')]
		public bool|null   $can_modify_stocktake_type = null,
		#[Assert\Type('bool')]
		public bool|null   $advance_status = null,
		#[Assert\Type('bool')]
		public bool|null   $pre_fill_actual_with_expected = null,
		#[Assert\Type('array')]
		public array|null  $stocktake_items = null,
		#[Assert\Type('array')]
		public array|null  $failed_stocktake_items = null,
		#[Assert\Type('array')]
		public array|null  $stocktake_count_sheet_items = null,
	) {
	}
}
