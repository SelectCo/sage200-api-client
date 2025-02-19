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
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 6)]
		public ?string $sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $account_number = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $account_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $bank_payment_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 40)]
		public ?string $iban_number = null,
		#[Assert\Type('string'), Assert\Length(max: 11)]
		public ?string $bic_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $roll_number = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $bacs_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $additional_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $non_uk_sort_code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $national_bank_identifier = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
