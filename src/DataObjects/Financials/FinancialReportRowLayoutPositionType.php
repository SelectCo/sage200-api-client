<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Financial statement layouts are designed to provide a clear representation of your accounts. Each
 * row in a financial layout can have an associated layout position 'type'. This list of available
 * types is predefined by the system.</P><P>The API endpoint returns details of financial report row
 * layout position types that can be used.
 */
class FinancialReportRowLayoutPositionType
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
