<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The confirm despatch records the despatch of goods and services from sales order lines to your
 * customers. This includes the tracking information of the despatch when applicable.
 */
class SopDespatchReceipt
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $despatch_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $despatched_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $despatch_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $courier_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_incoterm_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_export_reason_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $courier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_incoterm_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $sop_export_reason_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $consignment_no = null,
		#[Assert\Type('float')]
		public ?float $weight = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $pieces = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public ?string $notes = null,
		#[Assert\Type('object')]
		public ?object $courier = null,
		#[Assert\Type('object')]
		public ?object $sop_incoterm = null,
		#[Assert\Type('object')]
		public ?object $sop_export_reason = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
