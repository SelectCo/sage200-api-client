<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal reporting types are used by nominal codes. They determine whether the code is for the
 * Balance Sheet, Profit and Loss, Cashflow or SOFA category. This list of available types is
 * predefined by the system.</P><P>The API endpoint returns details of nominal account report types
 * that can be used.
 */
class NominalReportingType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $value = null,
	) {
	}
}
