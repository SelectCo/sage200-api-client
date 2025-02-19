<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A budget profile that can be associated with a nominal budget, where the budget type is set to
 * Profiled.
 */
class NominalBudgetProfile
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $name = null,
		#[Assert\Type('array')]
		public array|null  $periods = null,
	) {
	}
}
