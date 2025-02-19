<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all bank accounts. The default sort (orderby) field is by
 * 'code' ascending.
 */
class BankView
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
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $account_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $account_status_type_id = null,
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
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $statement_page_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $currency_symbol = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $currency_iso_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $currency_iso_code = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public ?string $currency_iso_code_name = null,
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
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $electronic_bank = null,
		#[Assert\Type('object')]
		public ?object $electronic_bank_function_id = null,
	) {
	}
}
