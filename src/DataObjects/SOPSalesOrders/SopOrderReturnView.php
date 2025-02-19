<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * "This resource returns the details of all SOP return orders (includes orders, returns, quotes,
 * proformas only). The default sort (orderby) fields are by 'document_no' and 'Id' ascending."
 */
class SopOrderReturnView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_print_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $customer_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('bool')]
		public bool|null   $are_prices_tax_inclusive = null,
		#[Assert\Type('float')]
		public float|null  $subtotal_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $subtotal_charge_net_value = null,
		#[Assert\Type('float')]
		public float|null  $subtotal_charge_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $subtotal_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $total_net_value = null,
		#[Assert\Type('float')]
		public float|null  $total_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $total_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $total_gross_value_inc_sett = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $settlement_discount_days = null,
		#[Assert\Type('float')]
		public float|null  $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $document_created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $promised_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $quotation_expiry_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $intrastat_status_id = null,
		#[Assert\Type('bool')]
		public bool|null   $ready_for_allocation = null,
		#[Assert\Type('bool')]
		public bool|null   $ready_for_despatch_receipt = null,
		#[Assert\Type('bool')]
		public bool|null   $ready_for_invoice_print = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $allocated_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $despatch_receipt_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $invoice_credit_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cancelled_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $source_document_no = null,
		#[Assert\Type('bool')]
		public bool|null   $use_invoice_address = null,
		#[Assert\Type('bool')]
		public bool|null   $payment_invoiced = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $payment_method_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $payment_reference = null,
		#[Assert\Type('float')]
		public float|null  $payment_value = null,
		#[Assert\Type('bool')]
		public bool|null   $payment_with_order = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $payment_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $payment_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $payment_nominal_department = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $payment_nominal_code_id = null,
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
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_short_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_post_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_country = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_fax = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_delivery_addr_email = null,
	) {
	}
}
