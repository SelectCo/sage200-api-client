<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product types are used to identify the different types of product that exist within the application.
 * Products can be 'Stock', 'Miscellaneous' or 'Service/Labour'.<P>The API endpoint returns details of
 * the product types that can be used.</P>
 */
class ProductType
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
