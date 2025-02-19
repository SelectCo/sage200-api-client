<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A group of BOM related settings for a product.
 */
class BomSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('float')]
		public ?float $order_min_quantity = null,
		#[Assert\Type('bool')]
		public ?bool $built_bought_default_make = null,
		#[Assert\Type('float')]
		public ?float $scrap_percent = null,
		#[Assert\Type('bool')]
		public ?bool $bulk_issue = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cost_heading_id = null,
		#[Assert\Type('object')]
		public ?object $cost_heading = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
	) {
	}
}
