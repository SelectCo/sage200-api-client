<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopOrderReturnLineDiscount
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $sop_order_return_line_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $source_of_price_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $discount_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $pricing_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $flat_rate_or_quantity_break_type = null,
		#[Assert\Type('float')]
		public ?float $quantity_break_quantity = null,
		#[Assert\Type('float')]
		public ?float $quantity_break_amount = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $discount_or_surcharge_type = null,
		#[Assert\Type('float')]
		public ?float $value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
