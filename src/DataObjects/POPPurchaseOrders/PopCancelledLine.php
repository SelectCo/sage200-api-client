<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A cancelled line holds details of changes to an order or return line.
 */
class PopCancelledLine
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $pop_order_return_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $item_code = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $item_description = null,
		#[Assert\Type('float')]
		public ?float $cancelled_quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $cancelled_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $user_number = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $buying_unit_description = null,
		#[Assert\Type('float')]
		public ?float $stock_unit_cancelled_quantity = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
