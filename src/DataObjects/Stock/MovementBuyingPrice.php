<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Object representing receipt of a level of stock at a specific buying price.
 */
class MovementBuyingPrice
{
	public function __construct(
		#[Assert\Type('float')]
		public float|null  $quantity = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $warehouse_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $bin_item_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $stock_item_unit_name = null,
	) {
	}
}
