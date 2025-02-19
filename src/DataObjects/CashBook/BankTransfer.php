<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * <p>Bank transfers are used to transfer money from one bank to another. In the Sage 200 app, this is
 * equivalent to making an Inter Account Transfer.</p><p>Note: before posting a bank transfer via the
 * API both the bank you are transferring from, and the bank you are transferring to, must exist within
 * Sage 200.</p>
 */
class BankTransfer
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bank_from_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bank_to_id = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $narrative = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('float')]
		public ?float $payment_value = null,
		#[Assert\Type('float')]
		public ?float $receipt_value = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $commission_value = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $commission_code = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $commission_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $commission_department = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $commission_payer = null,
		#[Assert\Type('float')]
		public ?float $payment_to_base_exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $receipt_to_base_exchange_rate = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $exchange_difference_code = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $exchange_difference_cost_centre = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $exchange_difference_department = null,
	) {
	}
}
