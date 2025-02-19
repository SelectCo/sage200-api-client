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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $product_group_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $unit_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $unit_type = null,
		#[Assert\Type('float')]
		public ?float $multiple_of_base_unit = null,
		#[Assert\Type('float')]
		public ?float $unit_precision = null,
		#[Assert\Type('bool')]
		public ?bool $use_own_price = null,
		#[Assert\Type('object')]
		public ?object $unit = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
