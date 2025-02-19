<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use the stock item holding object to return stock quantities and values across each WarehouseItem
 * and BinItem. Note the WarehouseItemHolding and BinItemHolding objects return similar information.
 */
class Holding
{
	public function __construct(
		#[Assert\Type('float')]
		public ?float $average_buying_price = null,
		#[Assert\Type('float')]
		public ?float $quantity_on_order_for_direct_delivery = null,
		#[Assert\Type('float')]
		public ?float $quantity_in_stock = null,
		#[Assert\Type('float')]
		public ?float $quantity_allocated = null,
		#[Assert\Type('float')]
		public ?float $quantity_on_order = null,
		#[Assert\Type('float')]
		public ?float $quantity_sold_this_period = null,
		#[Assert\Type('float')]
		public ?float $quantity_bought_this_period = null,
		#[Assert\Type('float')]
		public ?float $quantity_sold_last_period = null,
		#[Assert\Type('float')]
		public ?float $quantity_bought_last_period = null,
		#[Assert\Type('array')]
		public ?array $buying_prices = null,
	) {
	}
}
