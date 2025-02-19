<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All sales quotes contain 'line items' that define what an quote consists of (e.g. items on an
 * quote). If the contents of an quote are modified by adding/updating/deleting quote lines, this will
 * affect the overall value of the quote.
 */
class SopQuoteLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_quote_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $line_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('bool')]
		public ?bool $create_cancelled_line = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('bool')]
		public ?bool $use_description = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $description = null,
		#[Assert\Type('float')]
		public ?float $line_quantity = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $line_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $nominal_department = null,
		#[Assert\Type('float')]
		public ?float $allocated_quantity = null,
		#[Assert\Type('float')]
		public ?float $available_for_despatch = null,
		#[Assert\Type('float')]
		public ?float $despatch_receipt_quantity = null,
		#[Assert\Type('float')]
		public ?float $invoice_credit_quantity = null,
		#[Assert\Type('float')]
		public ?float $posted_invoice_credit_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_line_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_to_allocate_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_allocated_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_available_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_available_for_despatch = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_despatch_receipt_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_invoice_credit_quantity = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_posted_invoice_credit_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $allocation_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $despatch_receipt_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $invoice_credit_status = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $selling_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $selling_unit_description = null,
		#[Assert\Type('float')]
		public ?float $selling_unit_price = null,
		#[Assert\Type('bool')]
		public ?bool $selling_unit_price_overridden = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pricing_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $pricing_unit_description = null,
		#[Assert\Type('float')]
		public ?float $line_unit_precision = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_precision = null,
		#[Assert\Type('float')]
		public ?float $selling_unit_multiple = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_multiple = null,
		#[Assert\Type('float')]
		public ?float $unit_discount_percent = null,
		#[Assert\Type('bool')]
		public ?bool $discount_percent_specified = null,
		#[Assert\Type('float')]
		public ?float $unit_discount_value = null,
		#[Assert\Type('bool')]
		public ?bool $unit_discount_overridden = null,
		#[Assert\Type('float')]
		public ?float $discounted_unit_price = null,
		#[Assert\Type('float')]
		public ?float $cost_price = null,
		#[Assert\Type('bool')]
		public ?bool $retain_manual_prices = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $fulfilment_method = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $confirmation_intent_type = null,
		#[Assert\Type('float')]
		public ?float $line_tax_value = null,
		#[Assert\Type('float')]
		public ?float $line_total_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $promised_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $picking_list_comment = null,
		#[Assert\Type('string'), Assert\Length(max: 160)]
		public ?string $despatch_note_comment = null,
		#[Assert\Type('bool')]
		public ?bool $show_on_customer_docs = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $show_on_picking_list_type = null,
		#[Assert\Type('bool')]
		public ?bool $is_complete = null,
		#[Assert\Type('bool')]
		public ?bool $is_line_deletable = null,
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
		public ?object $additional_charge = null,
		public ?SopOrderReturnLineDiscount $discount = null,
		#[Assert\Type('object')]
		public ?object $nominal_code = null,
		#[Assert\Type('object')]
		public ?object $pricing_unit = null,
		#[Assert\Type('object')]
		public ?object $product = null,
		public ?SopOrderReturnLineProfit $profitability = null,
		#[Assert\Type('object')]
		public ?object $selling_unit = null,
		#[Assert\Type('object')]
		public ?object $sop_quote = null,
		#[Assert\Type('object')]
		public ?object $tax_code = null,
		#[Assert\Type('object')]
		public ?object $warehouse = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
