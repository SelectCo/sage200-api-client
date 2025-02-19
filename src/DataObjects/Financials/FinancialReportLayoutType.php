<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This list of available types is predefined by the system.</P><P>The API endpoint returns details of
 * financial report layout types that can be used.
 */
class FinancialReportLayoutType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
