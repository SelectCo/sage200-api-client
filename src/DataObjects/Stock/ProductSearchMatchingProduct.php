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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $product_status_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $product_type = null,
		#[Assert\Type('float')]
		public ?float $free_stock_quantity = null,
	) {
	}
}
