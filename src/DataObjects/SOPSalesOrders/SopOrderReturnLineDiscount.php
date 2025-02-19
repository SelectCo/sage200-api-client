<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopOrderReturnLineDiscount
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $source_of_price_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $discount_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $pricing_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $flat_rate_or_quantity_break_type = null,
		#[Assert\Type('float')]
		public float|null  $quantity_break_quantity = null,
		#[Assert\Type('float')]
		public float|null  $quantity_break_amount = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $discount_or_surcharge_type = null,
		#[Assert\Type('float')]
		public float|null  $value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
