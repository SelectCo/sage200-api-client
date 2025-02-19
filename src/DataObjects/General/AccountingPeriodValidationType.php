<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The accounting period validation status is used in System Settings and can be configured as
 * 'Acceptable', 'Unacceptable' or 'UseAccrual'.<P>The API endpoint returns details of the accounting
 * period validation types that can be used.</P>
 */
class AccountingPeriodValidationType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
