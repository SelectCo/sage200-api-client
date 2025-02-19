<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The tracking information for a SOP despatch.
 */
class PendingSopDespatchReceipt
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $courier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $consignment_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_incoterm_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_export_reason_id = null,
		#[Assert\Type('float')]
		public ?float $weight = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $pieces = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public ?string $notes = null,
	) {
	}
}
