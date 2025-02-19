<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product groups are used to group stock items together with similar characteristics or requirements.
 * Product Groups provide several default settings for stock items and have their own unique code and
 * description.
 */
class ProductGroup
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                  $code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null                  $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null                  $product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null                  $costing_method = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null                     $stocktake_cycle_period = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                  $label_printing_option_type = null,
		#[Assert\Type('bool')]
		public bool|null                    $keep_movement_history = null,
		#[Assert\Type('bool')]
		public bool|null                    $can_levels_go_negative = null,
		#[Assert\Type('bool')]
		public bool|null                    $can_over_allocate_negative_stock = null,
		#[Assert\Type('bool')]
		public bool|null                    $use_description_on_documents = null,
		#[Assert\Type('bool')]
		public bool|null                    $use_reverse_charge_vat_rules = null,
		#[Assert\Type('bool')]
		public bool|null                    $do_items_use_units = null,
		#[Assert\Type('bool')]
		public bool|null                    $this_is_the_sop_product_group = null,
		#[Assert\Type('bool')]
		public bool|null                    $selling_quantities_use_multiple_units = null,
		#[Assert\Type('bool')]
		public bool|null                    $selling_prices_use_multiple_units = null,
		#[Assert\Type('bool')]
		public bool|null                    $buying_quantities_use_multiple_units = null,
		#[Assert\Type('bool')]
		public bool|null                    $buying_prices_use_multiple_units = null,
		#[Assert\Type('bool')]
		public bool|null                    $do_items_use_markup = null,
		#[Assert\Type('bool')]
		public bool|null                    $use_landed_costs = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                  $landed_costs_type = null,
		#[Assert\Type('float')]
		public float|null                   $landed_costs_percentage = null,
		#[Assert\Type('float')]
		public float|null                   $landed_costs_per_item = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null                  $traceable_type = null,
		#[Assert\Type('bool')]
		public bool|null                    $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public bool|null                    $allow_duplicate_numbers = null,
		#[Assert\Type('bool')]
		public bool|null                    $uses_alternative_ref = null,
		#[Assert\Type('bool')]
		public bool|null                    $uses_sell_by_date = null,
		#[Assert\Type('bool')]
		public bool|null                    $uses_use_by_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $stock_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $revenue_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $accrual_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $issue_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $base_unit_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                     $stock_unit_id = null,
		#[Assert\Type('object')]
		public object|null                  $accrual_nominal_code = null,
		#[Assert\Type('object')]
		public object|null                  $issue_nominal_code = null,
		#[Assert\Type('object')]
		public object|null                  $revenue_nominal_code = null,
		#[Assert\Type('object')]
		public object|null                  $stock_nominal_code = null,
		#[Assert\Type('object')]
		public object|null                  $base_unit = null,
		#[Assert\Type('object')]
		public object|null                  $stock_unit = null,
		#[Assert\Type('array')]
		public array|null                   $search_categories = null,
		#[Assert\Type('array')]
		public array|null                   $units = null,
		public ProductGroupBomSettings|null $bom_settings = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                  $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                  $date_time_updated = null,
	) {
	}
}
