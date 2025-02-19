<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use this resource to enter credit notes directly onto to a particular customer's account. Credit
 * notes are typically used when issuing refunds, returns, etc and reduces the turnover for the
 * relevant customer's account.<br /><br />Posting a credit note does not actually create a 'credit
 * note' entity, but a Posted Transaction of type 'TradingAccountEntryTypeCreditNote', therefore it is
 * not possible to 'get' a credit note using the same API endpoint after it has been posted. Posting a
 * sales credit note returns a URN (Unique Reference Number) that can be used to find the corresponding
 * posted transaction.
 */
class SalesCreditNote
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('bool')]
		public ?bool $settled_immediately = null,
		#[Assert\Type('float')]
		public ?float $document_goods_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_value = null,
		#[Assert\Type('float')]
		public ?float $document_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $discount_days = null,
		#[Assert\Type('bool')]
		public ?bool $is_eu_trader = null,
		#[Assert\Type('bool')]
		public ?bool $triangular_transaction = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
	) {
	}
}
