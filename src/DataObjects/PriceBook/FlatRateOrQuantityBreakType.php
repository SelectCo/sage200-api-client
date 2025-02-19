<?php

namespace Selectco\SageApi\DataObjects\PriceBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This specifies whether a discount is flat rate or calculated based on a quantity.
 */
class FlatRateOrQuantityBreakType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
