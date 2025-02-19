<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All purchase orders contain 'line items' that define what an order consists of (e.g. items on an
 * order). If the contents of an order are modified by adding/updating/deleting order lines, this will
 * affect the overall value of the order.
 */
class PopOrderLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $pop_order_id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null                               $line_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $line_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $warehouse_id = null,
		#[Assert\Type('bool')]
		public bool|null                              $create_cancelled_line = null,
		#[Assert\Type('bool')]
		public bool|null                              $remove_link_to_sop_order_line = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null                            $code = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null                            $description = null,
		#[Assert\Type('bool')]
		public bool|null                              $use_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $supplier_part_ref = null,
		#[Assert\Type('bool')]
		public bool|null                              $for_direct_delivery = null,
		#[Assert\Type('bool')]
		public bool|null                              $show_on_supplier_docs = null,
		#[Assert\Type('bool')]
		public bool|null                              $update_prices_at_goods_receipt = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null                            $confirmation_intent_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $tax_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null                            $nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null                            $nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null                            $nominal_department = null,
		#[Assert\Type('float')]
		public float|null                             $line_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $receipt_return_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $invoice_credit_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_receipt_return_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_invoice_credit_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_on_order_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $line_unit_precision = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $buying_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $buying_unit_description = null,
		#[Assert\Type('float')]
		public float|null                             $unit_buying_price = null,
		#[Assert\Type('float')]
		public float|null                             $unit_discount_percent = null,
		#[Assert\Type('bool')]
		public bool|null                              $discount_percent_specified = null,
		#[Assert\Type('float')]
		public float|null                             $unit_discount_value = null,
		#[Assert\Type('float')]
		public float|null                             $discounted_unit_price = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                               $pricing_unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $pricing_unit_description = null,
		#[Assert\Type('float')]
		public float|null                             $pricing_unit_multiple = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_multiple = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_precision = null,
		#[Assert\Type('float')]
		public float|null                             $stock_unit_line_quantity = null,
		#[Assert\Type('float')]
		public float|null                             $line_total_value = null,
		#[Assert\Type('float')]
		public float|null                             $line_tax_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $landed_costs_type = null,
		#[Assert\Type('float')]
		public float|null                             $landed_costs_percentage = null,
		#[Assert\Type('float')]
		public float|null                             $landed_costs_per_item = null,
		#[Assert\Type('float')]
		public float|null                             $total_landed_costs_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $receipt_return_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null                            $invoice_credit_status = null,
		#[Assert\Type('bool')]
		public bool|null                              $is_complete = null,
		#[Assert\Type('bool')]
		public bool|null                              $is_line_deletable = null,
		#[Assert\Type('bool')]
		public bool|null                              $has_linked_order_lines = null,
		#[Assert\Type('bool')]
		public bool|null                              $has_requisition_lines = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null                            $analysis_code_20 = null,
		#[Assert\Type('object')]
		public object|null                            $buying_unit = null,
		#[Assert\Type('object')]
		public object|null                            $nominal_code = null,
		#[Assert\Type('object')]
		public object|null                            $pop_order = null,
		#[Assert\Type('object')]
		public object|null                            $pricing_unit = null,
		#[Assert\Type('object')]
		public object|null                            $product = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null                            $spare_text_10 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_1 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_2 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_3 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_4 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_5 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_6 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_7 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_8 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_9 = null,
		#[Assert\Type('float')]
		public float|null                             $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $spare_date_5 = null,
		#[Assert\Type('bool')]
		public bool|null                              $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public bool|null                              $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public bool|null                              $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public bool|null                              $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public bool|null                              $spare_bool_5 = null,
		#[Assert\Type('object')]
		public object|null                            $additional_charge = null,
		public PopOrderLineDirectDeliveryAddress|null $direct_delivery_address = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null                            $requisition_lines_comment = null,
		#[Assert\Type('object')]
		public object|null                            $cancel_requisition_lines = null,
		#[Assert\Type('array')]
		public array|null                             $linked_requisition_lines = null,
		#[Assert\Type('array')]
		public array|null                             $linked_order_lines = null,
		#[Assert\Type('object')]
		public object|null                            $tax_code = null,
		#[Assert\Type('object')]
		public object|null                            $warehouse = null,
		#[Assert\Type('array')]
		public array|null                             $requested_delivery_dates = null,
		#[Assert\Type('bool')]
		public bool|null                              $is_to_delete = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null                            $date_time_updated = null,
	) {
	}
}
