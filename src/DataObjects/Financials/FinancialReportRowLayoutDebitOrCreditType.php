<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Financial statement layouts are designed to provide a clear representation of your accounts. Each
 * row in a financial layout can have an associated debit or credit 'type'. This list of available
 * types is predefined by the system.</P><P>The API endpoint returns details of financial report row
 * layout debit or credit types that can be used.
 */
class FinancialReportRowLayoutDebitOrCreditType
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
