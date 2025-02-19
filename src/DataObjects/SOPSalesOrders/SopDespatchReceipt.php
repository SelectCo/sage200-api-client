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
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $despatch_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $despatched_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $despatch_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $courier_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_incoterm_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_export_reason_id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $courier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_incoterm_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $sop_export_reason_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $consignment_no = null,
		#[Assert\Type('float')]
		public float|null  $weight = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $pieces = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public string|null $notes = null,
		#[Assert\Type('object')]
		public object|null $courier = null,
		#[Assert\Type('object')]
		public object|null $sop_incoterm = null,
		#[Assert\Type('object')]
		public object|null $sop_export_reason = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
