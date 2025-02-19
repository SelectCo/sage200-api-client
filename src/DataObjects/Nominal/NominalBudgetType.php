<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Budgets for different financial years can be recorded against nominal accounts. Each year has has an
 * associated budget 'type'.
 */
class NominalBudgetType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
