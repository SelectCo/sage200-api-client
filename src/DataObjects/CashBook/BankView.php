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
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_type_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $account_status_type_id = null,
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
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $statement_page_number = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $currency_symbol = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $currency_iso_code_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $currency_iso_code = null,
		#[Assert\Type('string'), Assert\Length(max: 100)]
		public string|null $currency_iso_code_name = null,
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
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $electronic_bank = null,
		#[Assert\Type('object')]
		public object|null $electronic_bank_function_id = null,
	) {
	}
}
