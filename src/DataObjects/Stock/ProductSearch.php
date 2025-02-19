<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns matching products associated with the search category values passed.
 */
class ProductSearch
{
	public function __construct(
		#[Assert\Type('array')]
		public array|null  $search_category_values = null,
		#[Assert\Type('bool')]
		public bool|null   $show_inactive = null,
		#[Assert\Type('bool')]
		public bool|null   $show_phantom = null,
		#[Assert\Type('bool')]
		public bool|null   $show_only_allow_sales_order = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_search_type = null,
		#[Assert\Type('array')]
		public array|null  $matching_products = null,
	) {
	}
}
