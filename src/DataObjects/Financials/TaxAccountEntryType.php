<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This list of available types is predefined by the system.</P><P>The API endpoint returns details of
 * tax account entry types that can be used.
 */
class TaxAccountEntryType
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
