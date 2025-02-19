<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This specifies a lookup linking products with products that are an alternative for it.
 */
class AlternativeProductView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $product_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $alternative_product_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $alternative_product_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $alternative_product_name = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $alternative_product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $alternative_product_status_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $alternative_product_traceable_type_id = null,
		#[Assert\Type('bool')]
		public ?bool $is_preferred = null,
	) {
	}
}
