<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bank accounts can be created in Sage 200 for any type of account that money is paid in/out of, for
 * example, cash, credit cards or, business current account. Bank accounts can be in any currency and
 * all balances are recorded in the currency specific to that bank account.
 */
class Bank
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public string|null $sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_no = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $bank_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('float')]
		public float|null  $balance = null,
		#[Assert\Type('float')]
		public float|null  $balance_in_base = null,
		#[Assert\Type('float')]
		public float|null  $overdraft_limit = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $iban = null,
		#[Assert\Type('string'), Assert\Length(max: 11)]
		public string|null $bic = null,
		#[Assert\Type('float')]
		public float|null  $statement_balance = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $statement_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $bank_account_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $bank_account_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $bank_account_nominal_department = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $bank_charges_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $bank_charges_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $bank_charges_nominal_department = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $exchange_diff_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $exchange_diff_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $exchange_diff_nominal_department = null,
		#[Assert\Type('object')]
		public object|null $account_currency = null,
		#[Assert\Type('object')]
		public object|null $bank_account_nominal_code = null,
		#[Assert\Type('object')]
		public object|null $bank_address = null,
		#[Assert\Type('object')]
		public object|null $bank_charges_nominal_code = null,
		#[Assert\Type('object')]
		public object|null $exchange_diff_nominal_code = null,
		#[Assert\Type('array')]
		public array|null  $bank_contacts = null,
		#[Assert\Type('array')]
		public array|null  $emails = null,
		#[Assert\Type('array')]
		public array|null  $memos = null,
		#[Assert\Type('array')]
		public array|null  $websites = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
