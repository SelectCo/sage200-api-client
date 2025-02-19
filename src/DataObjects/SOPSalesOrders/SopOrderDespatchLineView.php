<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of despatch lines, sales orders, sales order lines, customers, products
 * and warehouses that can be queried on any field. The default sort (orderby) field are by
 * 'sop_despatch_id' and 'sop_despatch_line_id' descending.
 */
class SopOrderDespatchLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_despatch_line_id = null,
		#[Assert\Type('float')]
		public float|null  $sop_despatch_line_quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $sop_despatch_line_is_invoiced = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_despatch_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_despatch_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_despatch_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_despatch_user_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_line_type_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $sop_order_line_item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_order_line_item_description = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $sop_order_line_print_sequence_number = null,
		#[Assert\Type('float')]
		public float|null  $sop_order_line_quantity = null,
		#[Assert\Type('float')]
		public float|null  $sop_order_line_despatch_quantity = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_order_document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $sop_order_document_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $sop_order_document_status_type = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $sop_order_customer_document_no = null,
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
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_holding_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_despatch_courier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_despatch_consignment_no = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_despatch_incoterm = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_despatch_export_reason = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $sop_despatch_pieces = null,
		#[Assert\Type('float')]
		public float|null  $sop_despatch_weight = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public string|null $sop_despatch_notes = null,
		#[Assert\Type('string'), Assert\Length(max: 2083)]
		public string|null $sys_courier_tracking_url = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
