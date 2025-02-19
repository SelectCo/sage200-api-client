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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_requisition_line_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $linked_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $linked_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $pop_requisition_fulfilment_line_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $item_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $warehouse_item_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $warehouse_name = null,
		#[Assert\Type('float')]
		public ?float $quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $nominal_account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $nominal_account_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $nominal_department = null,
		#[Assert\Type('float')]
		public ?float $unit_buying_price = null,
		#[Assert\Type('float')]
		public ?float $net_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
