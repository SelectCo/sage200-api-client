<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When calculating the cost of BOMs, estimates or works orders, the values are accumulated in a cost
 * heading.
 */
class BomCostHeading
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $bom_cost_heading_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $name = null,
		#[Assert\Type('float')]
		public float|null  $markup = null,
		#[Assert\Type('float')]
		public float|null  $overhead_recovery_percent = null,
		#[Assert\Type('bool')]
		public bool|null   $reserved = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
	) {
	}
}
