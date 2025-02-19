<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger requests for purchase order information, the Purchase Order Line Views resource
 * is a faster alternative to the 'Purchase Orders' resource. The Purchase Order Line Views resource
 * returns more information than the 'Purchase Orders' resource, and therefore reduces the number of
 * API requests required to return the same information from multiple resources. <br /><br />This
 * resource returns a view of purchase orders, purchase order lines, suppliers, products, warehouses,
 * tax codes and currencies that can be queried on any field. The default sort (orderby) field are by
 * 'pop_order_id' and 'pop_order_line_id' descending.
 */
class PopOrderLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_order_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_order_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_order_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_order_document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_order_supplier_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_order_currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_order_currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $pop_order_currency_symbol = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_exchange_rate = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_order_requested_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_order_date_time_updated = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_document_originator_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_document_created_by_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_document_default_delivery_address_id = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_document_discount_percent = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $pop_order_settlement_discount_days = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_settlement_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_subtotal_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_landed_costs_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_subtotal_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_subtotal_landed_costs_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_order_line_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $pop_order_line_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_order_line_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_order_line_product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $pop_order_line_product_description = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_quantity = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_unit_price = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_unit_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_unit_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_total_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $pop_order_line_discounted_unit_price = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_order_line_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $pop_order_confirmation_intent_type = null,
		#[Assert\Type('bool')]
		public bool|null   $pop_order_line_for_direct_delivery = null,
		#[Assert\Type('bool')]
		public bool|null   $pop_order_line_show_on_supplier_docs = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_order_line_date_time_updated = null,
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
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $product_name = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $product_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $tax_code_id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $tax_code_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $tax_code_name = null,
		#[Assert\Type('float')]
		public float|null  $tax_code_rate = null,
	) {
	}
}
