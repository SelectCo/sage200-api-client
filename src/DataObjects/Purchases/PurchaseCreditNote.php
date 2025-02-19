<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use this resource to enter credit notes directly onto a particular supplier's account. Credit notes
 * are typically used when receiving refunds, returns, etc. and reduce the turnover for the relevant
 * supplier's account.<br /><br />Posting a credit note does not actually create a 'credit note'
 * entity, but a Posted Transaction of type 'TradingAccountEntryTypeCreditNote', therefore it is not
 * possible to 'get' a credit note using the same API endpoint after it has been posted. Posting a
 * purchase credit note returns a URN (Unique Reference Number) that can be used to find the
 * corresponding posted transaction.
 */
class PurchaseCreditNote
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
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
		#[Assert\Type('bool')]
		public ?bool $vat_adjustment_doc_expected = null,
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
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $authorisation_type = null,
		#[Assert\Type('bool')]
		public ?bool $is_authorised = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
	) {
	}
}
