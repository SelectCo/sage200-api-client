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
		public ?int $source_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $new_code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $new_name = null,
		#[Assert\Type('bool')]
		public ?bool $locations = null,
		#[Assert\Type('bool')]
		public ?bool $location_stocking_levels = null,
		#[Assert\Type('bool')]
		public ?bool $units = null,
		#[Assert\Type('bool')]
		public ?bool $alternative_items = null,
		#[Assert\Type('bool')]
		public ?bool $cross_selling_items = null,
		#[Assert\Type('bool')]
		public ?bool $attachments = null,
		#[Assert\Type('bool')]
		public ?bool $memos = null,
		#[Assert\Type('bool')]
		public ?bool $suppliers = null,
	) {
	}
}
