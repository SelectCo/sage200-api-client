<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Receipts are used to record money received against a bank account (Sage 200 Standard and versions of
 * Professional released after July 2017). In the Sage 200 app, this is equivalent to making a Nominal
 * Vatable Receipt or a Non-Vatable Receipt. <br /><br />Posting a bank receipt does not actually
 * create a 'bank receipt' entity, but a Posted Transaction of type 'BankAccountEntryType.Receipt',
 * therefore it is not possible to 'get' a bank receipt using the same API endpoint after it has been
 * posted. Posting a bank receipt returns a URN (Unique Reference Number) that can be used to find the
 * corresponding posted transaction.<br /><br />Note: Before posting bank receipts via the API, at
 * least one bank account must exist within Sage 200.
 */
class BankReceipt
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bank_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_registration_number = null,
		#[Assert\Type('string'), Assert\Length(max: 6000)]
		public string|null $narrative = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cheque_currency_id = null,
		#[Assert\Type('float')]
		public float|null  $cheque_exchange_rate = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $tax_code_id = null,
		#[Assert\Type('float')]
		public float|null  $cheque_value = null,
		#[Assert\Type('float')]
		public float|null  $cheque_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $cheque_tax_value = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $bank_charges = null,
		#[Assert\Type('array')]
		public array|null  $nominal_journal_items = null,
	) {
	}
}
