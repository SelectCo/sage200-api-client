<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger API requests for transaction information from the Purchase ledger, the Purchase
 * Transaction Views resource can be a faster alternative to the 'Purchase Posted Transactions'
 * resource.<br /><br />The Purchase Transaction Views resource also returns a wider breadth of
 * information than the Purchase Posted Transactions. By using the Purchase Transaction Views resource,
 * the quantity of API requests can be reduced, when returning the same information from multiple API
 * resources. The default sort (orderby) field is by 'posted_supplier_transaction_id' ascending.
 */
class PurchaseTransactionView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $posted_supplier_transaction_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $transaction_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $posted_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $due_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $discount_days = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public ?string $query = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $ledger_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $urn = null,
		#[Assert\Type('float')]
		public ?float $exchange_rate = null,
		#[Assert\Type('bool')]
		public ?bool $settled_immediately = null,
		#[Assert\Type('bool')]
		public ?bool $vat_adjustment_doc_expected = null,
		#[Assert\Type('float')]
		public ?float $base_goods_value = null,
		#[Assert\Type('float')]
		public ?float $base_gross_value = null,
		#[Assert\Type('float')]
		public ?float $base_discount_value = null,
		#[Assert\Type('float')]
		public ?float $base_tax_value = null,
		#[Assert\Type('float')]
		public ?float $base_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $base_allocated_value = null,
		#[Assert\Type('float')]
		public ?float $base_outstanding_value = null,
		#[Assert\Type('float')]
		public ?float $document_goods_value = null,
		#[Assert\Type('float')]
		public ?float $document_gross_value = null,
		#[Assert\Type('float')]
		public ?float $document_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_value = null,
		#[Assert\Type('float')]
		public ?float $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public ?float $document_allocated_value = null,
		#[Assert\Type('float')]
		public ?float $document_outstanding_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $supplier_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $supplier_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public ?string $currency_symbol = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $transaction_date_time_updated = null,
	) {
	}
}
