<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payments are used to record a supplier payment against a particular supplier's account.<br /><br
 * />Posting a purchase payment does not actually create a 'purchase payment' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchasePaymentSalesReceipt', therefore it is not
 * possible to 'get' a purchase payment using the same API endpoint after it has been posted. Posting a
 * purchase payment returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting purchase payments via the API, at least one bank
 * account must exist within Sage 200.
 */
class PurchasePayment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $bank_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cheque_currency_id = null,
		#[Assert\Type('float')]
		public float|null  $cheque_value = null,
		#[Assert\Type('float')]
		public float|null  $supplier_cheque_value = null,
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
