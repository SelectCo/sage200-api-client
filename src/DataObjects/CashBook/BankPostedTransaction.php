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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bank_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $bank_transaction_type = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null $entry_description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $posted_date = null,
		#[Assert\Type('float')]
		public float|null  $cheque_value = null,
		#[Assert\Type('float')]
		public float|null  $cheque_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $cheque_to_account_currency_rate = null,
		#[Assert\Type('float')]
		public float|null  $bank_cheque_to_base_currency_rate = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cheque_currency_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $last_statement_date = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $statement_page_number = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $source = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('array')]
		public array|null  $tax_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $trade_items = null,
		#[Assert\Type('object')]
		public object|null $bank = null,
		#[Assert\Type('object')]
		public object|null $cheque_currency = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
