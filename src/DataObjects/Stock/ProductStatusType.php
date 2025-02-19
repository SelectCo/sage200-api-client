<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product status types are used to identify when a product can have a stock movement recorded against
 * it within the application. Products can be 'Active' or 'Inactive'.<P>The API endpoint returns
 * details of the product status types that can be used.</P>
 */
class ProductStatusType
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
