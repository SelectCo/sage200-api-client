<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The product search request of search category values.
 */
class ProductSearchSearchCategoryValue
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_category_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_value_id = null,
	) {
	}
}
