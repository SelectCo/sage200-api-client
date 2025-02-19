<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The units of measure in which products are stored as well as those used when buying or selling
 * products.
 */
class ProductGroupUnit
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $unit_type = null,
		#[Assert\Type('float')]
		public float|null  $multiple_of_base_unit = null,
		#[Assert\Type('float')]
		public float|null  $unit_precision = null,
		#[Assert\Type('bool')]
		public bool|null   $use_own_price = null,
		#[Assert\Type('object')]
		public object|null $unit = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
