<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * "This resource returns the details of all POP documents (orders and returns). The default sort
 * (orderby) fields are by 'document_no' and 'Id' ascending."
 */
class PopOrderReturnView
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
		public string|null $supplier_document_no = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
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
		public float|null  $total_accrual_value = null,
		#[Assert\Type('float')]
		public float|null  $subtotal_landed_costs = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $settlement_discount_days = null,
		#[Assert\Type('float')]
		public float|null  $settlement_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $document_created_by = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $document_originator_name = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $document_originator_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $requested_delivery_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $intrastat_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $authorisation_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $receipt_return_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $invoice_credit_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cancelled_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $disputed_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $source_document_no = null,
		#[Assert\Type('bool')]
		public bool|null   $single_delivery_address = null,
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
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_short_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_post_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_country = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_fax = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_delivery_addr_email = null,
	) {
	}
}
