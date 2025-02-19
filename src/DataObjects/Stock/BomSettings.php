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
		public int|null    $id = null,
		#[Assert\Type('float')]
		public float|null  $order_min_quantity = null,
		#[Assert\Type('bool')]
		public bool|null   $built_bought_default_make = null,
		#[Assert\Type('float')]
		public float|null  $scrap_percent = null,
		#[Assert\Type('bool')]
		public bool|null   $bulk_issue = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cost_heading_id = null,
		#[Assert\Type('object')]
		public object|null $cost_heading = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
	) {
	}
}
