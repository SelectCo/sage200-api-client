<?php

namespace Selectco\SageApi\DataObjects\PriceBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This specifies whether a discount originates from a Customer, Stock Item or Product Group discount.
 */
class SourceOfPriceType
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
