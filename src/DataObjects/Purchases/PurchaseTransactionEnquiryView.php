<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase transaction enquiry views represent transactions posted against the Purchase Ledger, such
 * as purchases made, and any refunds or credit notes received. The $count includes memos and documents
 * associated with the transaction.
 */
class PurchaseTransactionEnquiryView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $trader_transaction_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public ?string $queried = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $posted_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $due_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $discount_days = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $discount_due_date = null,
		#[Assert\Type('float')]
		public ?float $document_gross_value = null,
		#[Assert\Type('float')]
		public ?float $document_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_discounted_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_allocated_value = null,
		#[Assert\Type('float')]
		public ?float $document_outstanding_value = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $allocation_status = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public ?string $memo_note_status = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('bool')]
		public ?bool $settled_immediately = null,
		#[Assert\Type('bool')]
		public ?bool $vat_adjustment_doc_expected = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $source = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('bool')]
		public ?bool $has_documents = null,
		#[Assert\Type('array')]
		public ?array $allocation_history_items = null,
		#[Assert\Type('array')]
		public ?array $allocation_session_items = null,
		#[Assert\Type('array')]
		public ?array $bank_items = null,
		#[Assert\Type('array')]
		public ?array $memos = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('object')]
		public ?object $supplier = null,
	) {
	}
}
