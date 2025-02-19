<?php

namespace Selectco\SageApi\DataObjects\Commercials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * In Northern Ireland (for HMRC), you can choose when to include transactions on your Intrastat
 * declaration; either on the despatch/receipt of goods, or the date VAT was applied.<P>The API
 * endpoint returns details of the intrastat date types that are used to determine when an order is
 * included on the Intrastat declaration.</P>
 */
class IntrastatDateType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $value = null,
	) {
	}
}
