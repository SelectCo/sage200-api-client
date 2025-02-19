<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal accounts are fundamental to the successful management of company finances. The value of
 * every transaction entered into Sage 200 is posted to a nominal account and, is where the revenue and
 * expenditure of the business is recorded.<P>Nominal accounts include a code, and cost centre and a
 * department.</P><P>The API endpoint returns details of the nominal codes that can be used.</P>
 */
class LookupNominalCode
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $cost_centre_code = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $department_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $nominal_account_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_status_type_id = null,
		#[Assert\Type('bool')]
		public bool|null   $display_balances_in_selection_list = null,
		#[Assert\Type('float')]
		public float|null  $balance_year_to_date = null,
		#[Assert\Type('float')]
		public float|null  $brought_forward_balance = null,
	) {
	}
}
