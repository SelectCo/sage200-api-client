<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Landed costs refer to any costs associated with the shipping, handling and importing of stock items
 * on purchase orders. These additional costs are often invoiced separately, for example, by a courier.
 * Landed costs type can be 'Not Applicable', 'Percentage Based', or 'Value Based'.<P>The API endpoint
 * returns details of the costing method types that can be used.</P>
 */
class LandedCostsType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
