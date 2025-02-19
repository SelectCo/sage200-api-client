<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Search categories are used to help you search for stock items without knowing the item's stock code.
 * <br/><br/>A search category consists of:<ul><li>A category. This is the type such as colour, size or
 * voltage.</li><li>A value. This is the specifics of the category such as green, red and blue for the
 * category colour.</li></ul>Search categories are inherited from the product group.
 */
class ProductSearchCategoryValue
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $search_category_id = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $search_category_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $search_value_id = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $search_value_name = null,
		#[Assert\Type('object')]
		public object|null $search_value = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
