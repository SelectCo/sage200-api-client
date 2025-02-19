<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The pricing source type for product suppliers. Pricing source type can be 'LastBuyingPrice', or
 * 'ListPrice'.<P>The API endpoint returns details of the pricing source types that can be used.</P>
 */
class PricingSourceType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
