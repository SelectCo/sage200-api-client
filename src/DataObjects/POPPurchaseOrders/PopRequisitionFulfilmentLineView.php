<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns a view of requisitions, lines and its fulfilments linked to a purchase order
 * line.
 */
class PopRequisitionFulfilmentLineView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_fulfilment_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_fulfilment_line_type_id = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_fulfilment_line_quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_requisition_fulfilment_line_item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $pop_requisition_fulfilment_line_item_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_fulfilment_line_linked_item_id = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_fulfilment_line_net_value = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_requisition_fulfilment_line_nominal_account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $pop_requisition_fulfilment_line_nominal_account_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $pop_requisition_fulfilment_line_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $pop_requisition_fulfilment_line_nominal_department = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_fulfilment_line_unit_buying_price = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_requisition_fulfilment_line_warehouse_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_fulfilment_line_supplier_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_requisition_document_no = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_line_net_value = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_requisition_line_item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $pop_requisition_line_item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $pop_requisition_line_currency_symbol = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_line_quantity_to_fulfil = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_line_quantity_fulfilled = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_line_status_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_line_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_requisition_line_delivery_date = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_requisition_line_authoriser_username = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_requisition_line_authorised_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $pop_requisition_date_time_created = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $pop_requisition_created_by_username = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_requisition_line_nominal_account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $pop_requisition_line_nominal_account_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $pop_requisition_line_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $pop_requisition_line_nominal_department = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_line_quantity = null,
		#[Assert\Type('float')]
		public float|null  $pop_requisition_line_unit_buying_price = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_requisition_line_warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $pop_requisition_line_supplier_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $pop_requisition_line_supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $pop_requisition_line_buying_unit_description = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $supplier_account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $supplier_account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $nominal_report_category_budget_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $sys_currency_symbol = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $stock_item_stock_unit_name = null,
	) {
	}
}
