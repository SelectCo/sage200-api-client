<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The POP requisition fulfilment line holds information about the fulfilments of a requisition line.
 */
class PopRequisitionFulfilmentLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $pop_requisition_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $linked_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $linked_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $pop_requisition_fulfilment_line_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $item_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $warehouse_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $nominal_account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $nominal_account_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $nominal_department = null,
		#[Assert\Type('float')]
		public float|null  $unit_buying_price = null,
		#[Assert\Type('float')]
		public float|null  $net_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
