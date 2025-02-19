<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Discrepancy status types describe the possible states of a stocktake discrepancy. Discrepancy status
 * type can be 'No Discrepancy', 'Discrepancy Found', or 'Discrepancy Resolved'.<P>The API endpoint
 * returns details of the discrepancy status types that can be used.</P>
 */
class DiscrepancyStatusType
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
