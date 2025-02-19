<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales orders are used to represent the sale of goods or services to a customer. They are central to
 * a business and define the terms (price, quantity and times) by which the products or services will
 * be delivered.<br /><br />Note: Adding  traceable  items to sales orders.<br/>If you're using
 * traceable stock items and an item is set to be sold from a single batch, then the order quantity
 * must be less than or equal to quantity in the batch. If you try to order more than the quantity in
 * the batch, the order cannot be posted via the API.<br /><br />Please note that as each line is
 * updated independently, as part of a PUT request, a failed line will return an error in the API
 * response body, however, all lines prior to this will be updated. Subsequent lines to the error will
 * not be posted.
 */
class SopOrder
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $customer_id = null,
		#[Assert\Type('bool')]
		public bool|null                 $is_draft = null,
		#[Assert\Type('bool')]
		public bool|null                 $is_editing = null,
		#[Assert\Type('bool')]
		public bool|null                 $is_to_sequence_lines = null,
		#[Assert\Type('bool')]
		public bool|null                 $override_on_hold = null,
		#[Assert\Type('bool')]
		public bool|null                 $recalculate_prices = null,
		#[Assert\Type('bool')]
		public bool|null                 $apply_available_document_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $lock_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $customer_delivery_address_id = null,
		#[Assert\Type('bool')]
		public bool|null                 $suppress_warnings = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null               $customer_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $despatch_receipt_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $invoice_credit_status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $cancelled_status = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $currency_id = null,
		#[Assert\Type('float')]
		public float|null                $exchange_rate = null,
		#[Assert\Type('float')]
		public float|null                $subtotal_goods_value = null,
		#[Assert\Type('float')]
		public float|null                $subtotal_charge_net_value = null,
		#[Assert\Type('float')]
		public float|null                $subtotal_charge_tax_value = null,
		#[Assert\Type('float')]
		public float|null                $subtotal_discount_value = null,
		#[Assert\Type('float')]
		public float|null                $total_net_value = null,
		#[Assert\Type('float')]
		public float|null                $total_tax_value = null,
		#[Assert\Type('float')]
		public float|null                $total_gross_value = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null               $customer_document_no = null,
		#[Assert\Type('bool')]
		public bool|null                 $is_credit_limit_exceeded = null,
		#[Assert\Type('bool')]
		public bool|null                 $use_invoice_address = null,
		#[Assert\Type('bool')]
		public bool|null                 $is_triangulated = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null                  $settlement_discount_days = null,
		#[Assert\Type('float')]
		public float|null                $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public float|null                $document_discount_percent = null,
		#[Assert\Type('float')]
		public float|null                $available_document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null               $document_created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $promised_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $quotation_expiry_date = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null               $order_priority = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $external_reference = null,
		#[Assert\Type('bool')]
		public bool|null                 $payment_with_order = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $payment_type = null,
		#[Assert\Type('bool')]
		public bool|null                 $invoice_payment_with_order_immediately = null,
		#[Assert\Type('float')]
		public float|null                $payment_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null               $payment_reference = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null                  $payment_method_id = null,
		#[Assert\Type('float')]
		public float|null                $payment_declared = null,
		#[Assert\Type('float')]
		public float|null                $payment_undeclared = null,
		#[Assert\Type('float')]
		public float|null                $declared_payment_remaining = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null               $analysis_code_20 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null               $spare_text_10 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_1 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_2 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_3 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_4 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_5 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_6 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_7 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_8 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_9 = null,
		#[Assert\Type('float')]
		public float|null                $spare_number_10 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_1 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_2 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_3 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_4 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $spare_date_5 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_1 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_2 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_3 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_4 = null,
		#[Assert\Type('bool')]
		public bool|null                 $spare_bool_5 = null,
		#[Assert\Type('object')]
		public object|null               $cash_account_invoice_address = null,
		#[Assert\Type('object')]
		public object|null               $currency = null,
		#[Assert\Type('object')]
		public object|null               $customer = null,
		#[Assert\Type('object')]
		public object|null               $delivery_address = null,
		#[Assert\Type('object')]
		public object|null               $payment_method = null,
		#[Assert\Type('object')]
		public object|null               $payment_status = null,
		public SopOrderReturnProfit|null $profitability = null,
		#[Assert\Type('array')]
		public array|null                $lines = null,
		#[Assert\Type('array')]
		public array|null                $memos = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null               $date_time_updated = null,
	) {
	}
}
