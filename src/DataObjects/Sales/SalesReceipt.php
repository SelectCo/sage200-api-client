<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Receipts are used to record a sales receipt against a particular customer's account.<br /><br
 * />Posting a sales receipt does not actually create a 'sales receipt' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchasePaymentSalesReceipt', therefore it is not
 * possible to 'get' a sales receipt using the same API endpoint after it has been posted. Posting a
 * sales receipt returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting sales receipts via the API, at least one bank
 * account must exist within Sage 200.
 */
class SalesReceipt
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bank_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cheque_currency_id = null,
		#[Assert\Type('float')]
		public float|null  $cheque_value = null,
		#[Assert\Type('float')]
		public float|null  $customer_cheque_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('float')]
		public float|null  $bank_exchange_rate = null,
		#[Assert\Type('float')]
		public float|null  $cheque_exchange_rate = null,
		#[Assert\Type('float')]
		public float|null  $settlement_discount_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
	) {
	}
}
