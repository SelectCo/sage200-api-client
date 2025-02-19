<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger requests for sales order information, the Sales Order Line Views resource is a
 * faster alternative to the 'Sales Orders' resource. The Sales Order Line Views resource returns more
 * information than the 'Sales Orders' resource, and therefore reduces the number of API requests
 * required to return the same information from multiple resources. <br /><br />This resource returns a
 * view of sales orders, sales order lines, customers, products, warehouses, tax codes and currencies
 * that can be queried on any field. The default sort (orderby) field are by 'sop_order_id' and
 * 'sop_order_line_id' descending.
 */
class SopOrderLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_order_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_order_document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $sop_order_customer_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $sop_order_currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $sop_order_currency_symbol = null,
		#[Assert\Type('float')]
		public ?float $sop_order_exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $sop_order_subtotal_goods_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_subtotal_charge_net_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_subtotal_charge_tax_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_subtotal_discount_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_promised_delivery_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $sop_order_settlement_discount_days = null,
		#[Assert\Type('float')]
		public ?float $sop_order_settlement_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $sop_order_document_discount_percent = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $sop_order_document_created_by = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_line_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $sop_order_line_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_order_line_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $sop_order_line_product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $sop_order_line_product_description = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_quantity = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_allocated_quantity = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_despatch_receipt_quantity = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_invoice_credit_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $sop_order_line_selling_unit_description = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_selling_unit_price = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_unit_discount_percent = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_unit_discount_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_cost_price = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_total_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_line_tax_value = null,
		#[Assert\Type('float')]
		public ?float $sop_order_line_discounted_unit_price = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_line_requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_line_promised_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_order_line_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $sop_order_line_date_time_updated = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_postal_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_address_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_address_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_address_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_address_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_city = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_county = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_post_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_country = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_contact = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_fax = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_delivery_addr_email = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $product_name = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $product_description = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $tax_code_id = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $tax_code_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $tax_code_name = null,
		#[Assert\Type('float')]
		public ?float $tax_code_rate = null,
	) {
	}
}
