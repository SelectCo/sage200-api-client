<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Supplier bank account.
 */
class Bank
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 6)]
		public string|null $sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $bank_payment_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public string|null $iban_number = null,
		#[Assert\Type('string'), Assert\Length(max: 11)]
		public string|null $bic_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $roll_number = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $bacs_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $additional_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $non_uk_sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $national_bank_identifier = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
