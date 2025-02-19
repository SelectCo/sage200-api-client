<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When making larger API requests for transaction information from the Sales ledger, the Sales
 * Transaction Views resource can be a faster alternative to the 'Sales Posted Transactions'
 * resource.<br /><br />The Sales Transaction Views resource also returns a wider breadth of
 * information than the Sales Posted Transactions. By using the Sales Transaction Views resource, the
 * quantity of API requests can be reduced, when returning the same information from multiple API
 * resources.
 */
class SalesTransactionView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $posted_customer_transaction_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $transaction_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $posted_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $due_date = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $discount_days = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 1)]
		public string|null $query = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $status = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $user_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $ledger_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $urn = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('bool')]
		public bool|null   $settled_immediately = null,
		#[Assert\Type('float')]
		public float|null  $base_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $base_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $base_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $base_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $base_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $base_outstanding_value = null,
		#[Assert\Type('float')]
		public float|null  $document_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $document_gross_value = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $document_allocated_value = null,
		#[Assert\Type('float')]
		public float|null  $document_outstanding_value = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $customer_name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $currency_name = null,
		#[Assert\Type('string'), Assert\Length(max: 4)]
		public string|null $currency_symbol = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date_time_updated = null,
	) {
	}
}
