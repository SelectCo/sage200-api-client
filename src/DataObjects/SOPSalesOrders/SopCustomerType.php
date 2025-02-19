<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The SOP customer type, used to determine the type of account for orders, quotes and proformas.<P>The
 * API endpoint returns the following values: EnumCustomerTypeCash, EnumCustomerTypeCredit,
 * EnumCustomerTypeProspect.</P>
 */
class SopCustomerType
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
