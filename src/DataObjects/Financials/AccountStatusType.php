<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The account status is used to determine whether a customer, supplier, nominal or bank account is
 * hidden or shown (Sage 200 Standard and versions of Professional released after July 2017). For bank
 * and nominal accounts, status types were added to versions after February 2018. Account status can be
 * configured as 'Active' or 'Hidden'.<P>The API endpoint returns details of the account status types
 * that can be used.</P>
 */
class AccountStatusType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $value = null,
	) {
	}
}
