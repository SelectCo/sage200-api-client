<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Label printing option types used to determine how to print order lablels. The label printing option
 * types are 'Label not required', 'Label required per item' and 'Label required per batch'.<P>The API
 * endpoint returns details of the label printing option types that can be used.</P>
 */
class LabelPrintingOptionType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
