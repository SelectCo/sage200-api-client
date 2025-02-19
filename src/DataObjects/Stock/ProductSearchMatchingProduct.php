<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The product search response of matching products.
 */
class ProductSearchMatchingProduct
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $product_status_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $product_type = null,
		#[Assert\Type('float')]
		public float|null  $free_stock_quantity = null,
	) {
	}
}
