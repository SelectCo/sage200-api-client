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
		public ?float $buying_price = null,
		#[Assert\Type('float')]
		public ?float $stock_level = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $stock_unit_name = null,
		#[Assert\Type('float')]
		public ?float $number_of_movements = null,
		#[Assert\Type('bool')]
		public ?bool $is_buying_price_confirmed = null,
		#[Assert\Type('array')]
		public ?array $buying_prices = null,
	) {
	}
}
