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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $bom_cost_heading_type = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $name = null,
		#[Assert\Type('float')]
		public ?float $markup = null,
		#[Assert\Type('float')]
		public ?float $overhead_recovery_percent = null,
		#[Assert\Type('bool')]
		public ?bool $reserved = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
	) {
	}
}
