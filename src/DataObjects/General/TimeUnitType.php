<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Time unit types are used to indicate a unit of time within the application. Time units can be
 * 'Days', 'Weeks', 'Months' or 'Years'.<P>The API endpoint returns details of the time unit types that
 * can be used.</P>
 */
class TimeUnitType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
