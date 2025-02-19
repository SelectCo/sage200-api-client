<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bank posted transactions are created when transactions such as receipts or payments are posted
 * against the Cash Book.<br /><br />It is not possible to use this API resource to create posted
 * transactions. To post a transaction, the necessary API resource must be invoked.
 */
class BankPostedTransaction
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bank_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $bank_transaction_type = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public ?string $entry_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $posted_date = null,
		#[Assert\Type('float')]
		public ?float $cheque_value = null,
		#[Assert\Type('float')]
		public ?float $cheque_discount_value = null,
		#[Assert\Type('float')]
		public ?float $cheque_to_account_currency_rate = null,
		#[Assert\Type('float')]
		public ?float $bank_cheque_to_base_currency_rate = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cheque_currency_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_statement_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $statement_page_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $source = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $trade_items = null,
		#[Assert\Type('object')]
		public ?object $bank = null,
		#[Assert\Type('object')]
		public ?object $cheque_currency = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
