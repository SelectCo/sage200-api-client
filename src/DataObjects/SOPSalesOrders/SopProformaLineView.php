<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of sales pro formas, sales pro forma lines, customers, products,
 * warehouses, tax codes and currencies that can be queried on any field. The default sort (orderby)
 * field are by 'sop_proforma_id' and 'sop_proforma_line_id' descending.
 */
class SopProformaLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_proforma_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_proforma_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_proforma_document_status = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $sop_proforma_customer_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_proforma_currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $sop_proforma_currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $sop_proforma_currency_symbol = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_exchange_rate = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_promised_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_proforma_line_id = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $sop_proforma_line_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_proforma_line_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $sop_proforma_line_product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $sop_proforma_line_product_description = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_proforma_line_selling_unit_description = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_selling_unit_price = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_unit_discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_unit_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_cost_price = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_total_value = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_line_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $sop_proforma_line_discounted_unit_price = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_line_requested_delivery_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_line_promised_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_1 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_2 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_3 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_4 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_5 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_6 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_7 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_8 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_9 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_10 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_11 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_12 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_13 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_14 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_15 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_16 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_17 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_18 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_19 = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_proforma_line_analysis_code_20 = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_proforma_line_date_time_updated = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
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
