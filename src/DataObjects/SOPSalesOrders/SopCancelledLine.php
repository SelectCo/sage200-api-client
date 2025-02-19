<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A cancelled line holds details of changes to an order or return line.
 */
class SopCancelledLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $item_description = null,
		#[Assert\Type('float')]
		public float|null  $cancelled_quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $cancelled_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $user_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $selling_unit_description = null,
		#[Assert\Type('float')]
		public float|null  $stock_unit_cancelled_quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
