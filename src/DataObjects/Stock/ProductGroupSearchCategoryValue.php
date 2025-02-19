<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This API endpoint returns a list of the allowed values for a product group search category.
 */
class ProductGroupSearchCategoryValue
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $prod_group_search_val_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $search_category_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_value_id = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $search_value_name = null,
	) {
	}
}
