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
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $status_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $status_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bom_item_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_group_product_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_group_product_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $product_group_code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_group_description = null,
		#[Assert\Type('bool')]
		public bool|null   $product_group_do_items_use_markup = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_group_costing_method_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_group_costing_method_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $traceable_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $traceable_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $inactive_date = null,
		#[Assert\Type('float')]
		public float|null  $stock_multiple_of_base_unit = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $stock_unit_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $base_unit_name = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $manufacturer = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $part_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $label_printing_option_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $label_printing_option_type = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_sales_order = null,
		#[Assert\Type('float')]
		public float|null  $average_buying_price = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $description = null,
		#[Assert\Type('bool')]
		public bool|null   $use_description_on_docs = null,
		#[Assert\Type('bool')]
		public bool|null   $sale_from_single_batch = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_duplicate_numbers = null,
		#[Assert\Type('bool')]
		public bool|null   $uses_sell_by_date = null,
		#[Assert\Type('bool')]
		public bool|null   $uses_use_by_date = null,
		#[Assert\Type('bool')]
		public bool|null   $record_nos_on_goods_received = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $auto_generate_option_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $auto_generate_option_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $auto_generate_prefix = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $auto_generate_next_number = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $commodity_code = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $stock_take_cycle_period = null,
		#[Assert\Type('bool')]
		public bool|null   $suppress_net_mass = null,
		#[Assert\Type('float')]
		public float|null  $weight = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $std_cost_variance_last_reset = null,
		#[Assert\Type('bool')]
		public bool|null   $uses_alternative_ref = null,
		#[Assert\Type('float')]
		public float|null  $selling_price = null,
		#[Assert\Type('float')]
		public float|null  $standard_cost = null,
		#[Assert\Type('float')]
		public float|null  $sop_item_price = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_archived_up_to = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_trace_archived_up_to = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $fulfilment_method_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $fulfilment_method_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $fulfilment_sequence_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $fulfilment_sequence_type = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $shelf_life = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $shelf_life_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $shelf_life_type = null,
		#[Assert\Type('bool')]
		public bool|null   $this_is_the_standard_band = null,
		#[Assert\Type('float')]
		public float|null  $landed_costs_value = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public string|null $default_despatch_note_comment = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public string|null $default_picking_list_comment = null,
		#[Assert\Type('float')]
		public float|null  $price = null,
		#[Assert\Type('float')]
		public float|null  $free_stock_quantity = null,
		#[Assert\Type('float')]
		public float|null  $quantity_reserved = null,
		#[Assert\Type('float')]
		public float|null  $confirmed_quantity_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $unconfirmed_quantity_in_stock = null,
		#[Assert\Type('float')]
		public float|null  $actual_quantity = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_stock = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_sop = null,
		#[Assert\Type('float')]
		public float|null  $quantity_allocated_bom = null,
		#[Assert\Type('float')]
		public float|null  $quantity_on_pop_order = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_of_last_sale = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_of_last_stock_count = null,
		#[Assert\Type('float')]
		public float|null  $reorder_level = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $analysis_code_20 = null,
	) {
	}
}
