<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of stock item unit information for populating a lookup.
 */
class LookupStockItemUnit
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $stock_item_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $unit_id = null,
	) {
	}
}
