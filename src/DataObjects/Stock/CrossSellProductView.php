<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This specifies a lookup linking products with products that it can be cross sold with.
 */
class CrossSellProductView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $product_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cross_sell_product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $cross_sell_product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $cross_sell_product_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cross_sell_product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cross_sell_product_status_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cross_sell_product_traceable_type_id = null,
	) {
	}
}
