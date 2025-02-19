<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Products are used to track stock within Sage 200. This is not just for physical items, but also for
 * items that are ordered direct from suppliers, services, and time or labour that can be included on
 * customer invoices.<P>Each stock item has default settings that are used each time the item is bought
 * or sold. Some of these are inherited from the product group and some are set on each
 * item.</P><p>Note: When creating products via the API, each product is assigned to a warehouse. If
 * the stock setting UseMultipleLocations is true then multiple warehouse holdings can be specified.
 * You cannot delete the last warehouse holding associated with a product.</p>
 */
class Product
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $description = null,
		#[Assert\Type('bool')]
		public ?bool $use_description_on_documents = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $barcode = null,
		#[Assert\Type('bool')]
		public ?bool $allow_sales_order = null,
		#[Assert\Type('float')]
		public ?float $free_stock_quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $product_status_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $fulfilment_method_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $fulfilment_sequence_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $inactivation_date = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $manufacturer = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $part_number = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $label_printing_option_type = null,
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
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $shelf_life = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $shelf_life_type = null,
		#[Assert\Type('bool')]
		public ?bool $record_nos_on_goods_received = null,
		#[Assert\Type('bool')]
		public ?bool $include_nos_on_count_sheets = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $auto_generate_option_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $auto_generate_separator_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $auto_generate_prefix = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $auto_generate_next_number = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $auto_generate_padding = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $stocktake_cycle_period = null,
		#[Assert\Type('float')]
		public ?float $standard_cost = null,
		#[Assert\Type('float')]
		public ?float $average_buying_price = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $default_picking_list_comment = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $default_despatch_note_comment = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $commodity_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $country_of_origin_id = null,
		#[Assert\Type('float')]
		public ?float $weight = null,
		#[Assert\Type('bool')]
		public ?bool $suppress_mass_on_declaration = null,
		#[Assert\Type('bool')]
		public ?bool $is_weee_item = null,
		#[Assert\Type('bool')]
		public ?bool $use_supplementary_units = null,
		#[Assert\Type('float')]
		public ?float $supplementary_unit_conversion_ratio = null,
		#[Assert\Type('bool')]
		public ?bool $use_reverse_charge_vat_rules = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $landed_costs_type = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_percentage = null,
		#[Assert\Type('float')]
		public ?float $landed_costs_per_item = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $bom_item_type = null,
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
		#[Assert\Type('bool')]
		public ?bool $has_alternative_products = null,
		#[Assert\Type('bool')]
		public ?bool $has_cross_sell_products = null,
		#[Assert\Type('bool')]
		public ?bool $has_preferred_supplier = null,
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
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $spare_text_10 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_1 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_2 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_3 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_4 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_5 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_6 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_7 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_8 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_9 = null,
		#[Assert\Type('float')]
		public ?float $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $spare_date_5 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public ?bool $spare_bool_5 = null,
		#[Assert\Type('object')]
		public ?object $accrual_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $auto_generate_separator = null,
		#[Assert\Type('object')]
		public ?object $base_unit = null,
		public ?BomSettings $bom_settings = null,
		#[Assert\Type('object')]
		public ?object $country_of_origin = null,
		#[Assert\Type('object')]
		public ?object $holding = null,
		#[Assert\Type('object')]
		public ?object $issue_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $product_group = null,
		#[Assert\Type('object')]
		public ?object $revenue_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $status = null,
		#[Assert\Type('object')]
		public ?object $stock_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $stock_unit = null,
		#[Assert\Type('object')]
		public ?object $tax_code = null,
		#[Assert\Type('array')]
		public ?array $alternative_products = null,
		#[Assert\Type('array')]
		public ?array $cross_sell_products = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('array')]
		public ?array $search_category_values = null,
		#[Assert\Type('array')]
		public ?array $suppliers = null,
		#[Assert\Type('array')]
		public ?array $units = null,
		#[Assert\Type('array')]
		public ?array $warehouse_holdings = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
