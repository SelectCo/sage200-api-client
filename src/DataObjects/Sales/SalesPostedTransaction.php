<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales posted transactions are created when transactions, such as orders invoiced, receipts, refunds
 * or credit notes, are posted against the Sales Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked. When making larger requests for customer information, the Sales Transactions Views resource
 * can be a faster alternative to this resource.<br /><br />It is possible to use this API resource to
 * update a transaction's queried status.
 */
class SalesPostedTransaction
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
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
		public ?string $full_settlement_date = null,
		#[Assert\Type('float')]
		public ?float $document_goods_value = null,
		#[Assert\Type('float')]
		public ?float $document_gross_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_value = null,
		#[Assert\Type('float')]
		public ?float $document_discount_value = null,
		#[Assert\Type('float')]
		public ?float $discount_percent = null,
		#[Assert\Type('float')]
		public ?float $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_allocated_value = null,
		#[Assert\Type('float')]
		public ?float $document_outstanding_value = null,
		#[Assert\Type('float')]
		public ?float $base_goods_value = null,
		#[Assert\Type('float')]
		public ?float $base_gross_value = null,
		#[Assert\Type('float')]
		public ?float $base_tax_value = null,
		#[Assert\Type('float')]
		public ?float $base_discount_value = null,
		#[Assert\Type('float')]
		public ?float $base_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $base_allocated_value = null,
		#[Assert\Type('float')]
		public ?float $control_value_in_base_currency = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('bool')]
		public ?bool $settled_immediately = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $discount_days = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('array')]
		public ?array $tax_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public ?array $bank_items = null,
		#[Assert\Type('array')]
		public ?array $allocation_session_items = null,
		#[Assert\Type('array')]
		public ?array $allocation_history_items = null,
		#[Assert\Type('object')]
		public ?object $customer = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
