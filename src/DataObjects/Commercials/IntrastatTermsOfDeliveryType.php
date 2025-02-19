<?php

namespace Selectco\SageApi\DataObjects\Commercials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * If the delivery threshold set by HMRC or the Revenue Commissioners has been (or will be) exceeded,
 * terms of delivery must be included on the Intrastat declaration.<P>The API endpoint returns details
 * of the intrastat terms of delivery types that are used on an Intrastat declaration.</P>
 */
class IntrastatTermsOfDeliveryType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $value = null,
	) {
	}
}
