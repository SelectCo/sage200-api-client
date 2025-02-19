<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a duplicate sales quote using the sales quote options specified.<p>This API endpoint creates
 * a draft sales quote which needs to be either:<ul><li>confirmed as a live quote by using the PUT
 * sop_quotes endpoint with the field 'is_editing' set to false</li><li>discarded using the DELETE
 * sop_quotes endpoint</li></ul></p>
 */
class SopQuoteDuplicateFlags
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $source_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null  $customer_id = null,
		#[Assert\Type('bool')]
		public bool|null $prices_and_discounts = null,
	) {
	}
}
