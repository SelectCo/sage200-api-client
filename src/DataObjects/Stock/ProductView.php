<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger requests for product information, the Product Views resource can be a faster
 * alternative to the 'Product' resource. The Product Views resource also returns a wider breadth of
 * information than the Product resource. Using Product Views could therefore reduce the quantity of
 * API requests needed to return the same information from multiple API resources.
 */
class ProductView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $status_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bom_item_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_product_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_group_product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $product_group_code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_group_description = null,
		#[Assert\Type('bool')]
		public ?bool $product_group_do_items_use_markup = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_costing_method_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_group_costing_method_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $traceable_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $traceable_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $inactive_date = null,
		#[Assert\Type('float')]
		public ?float $stock_multiple_of_base_unit = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $stock_unit_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $base_unit_name = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $manufacturer = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $part_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $label_printing_option_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $label_printing_option_type = null,
		#[Assert\Type('bool')]
		public ?bool $allow_sales_order = null,
		#[Assert\Type('float')]
		public ?float $average_buying_price = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $description = null,
		#[Assert\Type('bool')]
		public ?bool $use_description_on_docs = null,
		#[Assert\Type('bool')]
		public ?bool $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public ?bool $allow_duplicate_numbers = null,
		#[Assert\Type('bool')]
		public ?bool $uses_sell_by_date = null,
		#[Assert\Type('bool')]
		public ?bool $uses_use_by_date = null,
		#[Assert\Type('bool')]
		public ?bool $record_nos_on_goods_received = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $auto_generate_option_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $auto_generate_option_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $auto_generate_prefix = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $auto_generate_next_number = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $commodity_code = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $stock_take_cycle_period = null,
		#[Assert\Type('bool')]
		public ?bool $suppress_net_mass = null,
		#[Assert\Type('float')]
		public ?float $weight = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $std_cost_variance_last_reset = null,
		#[Assert\Type('bool')]
		public ?bool $uses_alternative_ref = null,
		#[Assert\Type('float')]
		public ?float $selling_price = null,
		#[Assert\Type('float')]
		public ?float $standard_cost = null,
		#[Assert\Type('float')]
		public ?float $sop_item_price = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_archived_up_to = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_trace_archived_up_to = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $fulfilment_method_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $fulfilment_method_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $fulfilment_sequence_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $fulfilment_sequence_type = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $shelf_life = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $shelf_life_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $shelf_life_type = null,
		#[Assert\Type('bool')]
		public ?bool $this_is_the_standard_band = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_value = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $default_despatch_note_comment = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $default_picking_list_comment = null,
		#[Assert\Type('float')]
		public ?float $price = null,
		#[Assert\Type('float')]
		public ?float $free_stock_quantity = null,
		#[Assert\Type('float')]
		public ?float $quantity_reserved = null,
		#[Assert\Type('float')]
		public ?float $confirmed_quantity_in_stock = null,
		#[Assert\Type('float')]
		public ?float $unconfirmed_quantity_in_stock = null,
		#[Assert\Type('float')]
		public ?float $actual_quantity = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_sop = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated_bom = null,
		#[Assert\Type('float')]
		public ?float $quantity_on_pop_order = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_of_last_sale = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_of_last_stock_count = null,
		#[Assert\Type('float')]
		public ?float $reorder_level = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $analysis_code_20 = null,
	) {
	}
}
