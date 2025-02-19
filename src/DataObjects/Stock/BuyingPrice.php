<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The specific buying price at which a stock item was received.
 */
class BuyingPrice
{
	public function __construct(
		#[Assert\Type('float')]
		public float|null  $buying_price = null,
		#[Assert\Type('float')]
		public float|null  $stock_level = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $stock_unit_name = null,
		#[Assert\Type('float')]
		public float|null  $number_of_movements = null,
		#[Assert\Type('bool')]
		public bool|null   $is_buying_price_confirmed = null,
		#[Assert\Type('array')]
		public array|null  $buying_prices = null,
	) {
	}
}
