<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payments are used to record a sales payment against a particular customer's account.<br /><br
 * />Posting a sales payment does not actually create a 'sales payment' entity, but a Posted
 * Transaction of type 'TradingAccountEntryTypePurchaseReceiptSalesPayment', therefore it is not
 * possible to 'get' a sales payment using the same API endpoint after it has been posted. Posting a
 * sales payment returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.<br /><br />Note: Before posting sales payments via the API, at least one bank
 * account must exist within Sage 200.
 */
class SalesPayment
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $bank_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $cheque_currency_id = null,
		#[Assert\Type('float')]
		public ?float $cheque_value = null,
		#[Assert\Type('float')]
		public ?float $customer_cheque_value = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $bank_exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $cheque_exchange_rate = null,
		#[Assert\Type('float')]
		public ?float $settlement_discount_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
	) {
	}
}
