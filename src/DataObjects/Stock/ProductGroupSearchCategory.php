<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The search categories for the product group.
 */
class ProductGroupSearchCategory
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_category_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $search_category_name = null,
		#[Assert\Type('object')]
		public ?object $default_search_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
