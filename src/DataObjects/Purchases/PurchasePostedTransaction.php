<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Purchase posted transactions are created when transactions, such as purchases made, refunds or
 * credit notes, are posted against the Purchase Ledger.<br /><br />It is not possible to use this API
 * resource to create posted transactions. To post a transaction, the necessary API resource must be
 * invoked.
 */
class PurchasePostedTransaction
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $trader_transaction_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $queried = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $posted_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $due_date = null,
		#[Assert\Type('float')]
		public float|null  $document_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $document_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $discount_percent = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $document_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $document_outstanding_value = null,
		#[Assert\Type('float')]
		public float|null  $base_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $base_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $base_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $control_value_in_base_currency = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('bool')]
		public bool|null   $settled_immediately = null,
		#[Assert\Type('bool')]
		public bool|null   $vat_adjustment_doc_expected = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $discount_days = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $urn = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('array')]
		public array|null  $tax_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $bank_items = null,
		#[Assert\Type('array')]
		public array|null  $allocation_session_items = null,
		#[Assert\Type('array')]
		public array|null  $allocation_history_items = null,
		#[Assert\Type('object')]
		public object|null $supplier = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
