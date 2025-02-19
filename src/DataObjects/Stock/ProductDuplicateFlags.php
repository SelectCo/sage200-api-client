<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a duplicate product using the product options specified.
 */
class ProductDuplicateFlags
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $source_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $new_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $new_name = null,
		#[Assert\Type('bool')]
		public bool|null   $locations = null,
		#[Assert\Type('bool')]
		public bool|null   $location_stocking_levels = null,
		#[Assert\Type('bool')]
		public bool|null   $units = null,
		#[Assert\Type('bool')]
		public bool|null   $alternative_items = null,
		#[Assert\Type('bool')]
		public bool|null   $cross_selling_items = null,
		#[Assert\Type('bool')]
		public bool|null   $attachments = null,
		#[Assert\Type('bool')]
		public bool|null   $memos = null,
		#[Assert\Type('bool')]
		public bool|null   $suppliers = null,
	) {
	}
}
