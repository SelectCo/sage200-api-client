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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 10)]
		public ?string $sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_no = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $bank_name = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_status_type = null,
		#[Assert\Type('float')]
		public ?float $balance = null,
		#[Assert\Type('float')]
		public ?float $balance_in_base = null,
		#[Assert\Type('float')]
		public ?float $overdraft_limit = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $iban = null,
		#[Assert\Type('string'), Assert\Length(max: 11)]
		public ?string $bic = null,
		#[Assert\Type('float')]
		public ?float $statement_balance = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $statement_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $account_currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $bank_account_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $bank_account_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $bank_account_nominal_department = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $bank_charges_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $bank_charges_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $bank_charges_nominal_department = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $exchange_diff_nominal_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $exchange_diff_nominal_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $exchange_diff_nominal_department = null,
		#[Assert\Type('object')]
		public ?object $account_currency = null,
		#[Assert\Type('object')]
		public ?object $bank_account_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $bank_address = null,
		#[Assert\Type('object')]
		public ?object $bank_charges_nominal_code = null,
		#[Assert\Type('object')]
		public ?object $exchange_diff_nominal_code = null,
		#[Assert\Type('array')]
		public ?array $bank_contacts = null,
		#[Assert\Type('array')]
		public ?array $emails = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('array')]
		public ?array $websites = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
