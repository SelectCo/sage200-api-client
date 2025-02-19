<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The BOM related settings for the product group
 */
class ProductGroupBomSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cost_heading_id = null,
		#[Assert\Type('object')]
		public object|null $cost_heading = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
	) {
	}
}
