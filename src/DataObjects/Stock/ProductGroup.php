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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $costing_method = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $stocktake_cycle_period = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $label_printing_option_type = null,
		#[Assert\Type('bool')]
		public ?bool $keep_movement_history = null,
		#[Assert\Type('bool')]
		public ?bool $can_levels_go_negative = null,
		#[Assert\Type('bool')]
		public ?bool $can_over_allocate_negative_stock = null,
		#[Assert\Type('bool')]
		public ?bool $use_description_on_documents = null,
		#[Assert\Type('bool')]
		public ?bool $use_reverse_charge_vat_rules = null,
		#[Assert\Type('bool')]
		public ?bool $do_items_use_units = null,
		#[Assert\Type('bool')]
		public ?bool $this_is_the_sop_product_group = null,
		#[Assert\Type('bool')]
		public ?bool $selling_quantities_use_multiple_units = null,
		#[Assert\Type('bool')]
		public ?bool $selling_prices_use_multiple_units = null,
		#[Assert\Type('bool')]
		public ?bool $buying_quantities_use_multiple_units = null,
		#[Assert\Type('bool')]
		public ?bool $buying_prices_use_multiple_units = null,
		#[Assert\Type('bool')]
		public ?bool $do_items_use_markup = null,
		#[Assert\Type('bool')]
		public ?bool $use_landed_costs = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $landed_costs_type = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_percentage = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_per_item = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $traceable_type = null,
		#[Assert\Type('bool')]
		public ?bool $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public ?bool $allow_duplicate_numbers = null,
		#[Assert\Type('bool')]
		public ?bool $uses_alternative_ref = null,
		#[Assert\Type('bool')]
		public ?bool $uses_sell_by_date = null,
		#[Assert\Type('bool')]
		public ?bool $uses_use_by_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $stock_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $revenue_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $accrual_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $issue_nominal_code_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $base_unit_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $stock_unit_id = null,
		#[Assert\Type('object')]
		public ?object $accrual_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $issue_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $revenue_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $stock_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $base_unit = null,
		#[Assert\Type('object')]
		public ?object $stock_unit = null,
		#[Assert\Type('array')]
		public ?array $search_categories = null,
		#[Assert\Type('array')]
		public ?array $units = null,
		public ?ProductGroupBomSettings $bom_settings = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
