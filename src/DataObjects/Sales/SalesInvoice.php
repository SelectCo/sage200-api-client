<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Invoices are used to record a sale against a particular customer's account.<br /><br />Posting a
 * sales invoice does not actually create a 'sales invoice' entity, but a Posted Transaction of type
 * 'TradingAccountEntryTypeInvoice', therefore it is not possible to 'get' a sales invoice using the
 * same API endpoint after it has been posted. Posting a sales invoice returns a URN (Unique Reference
 * Number) that can be used to find the corresponding posted transaction.
 */
class SalesInvoice
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $transaction_date = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $due_date = null,
		#[Assert\Type('float')]
		public float|null  $exchange_rate = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $reference = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $second_reference = null,
		#[Assert\Type('bool')]
		public bool|null   $settled_immediately = null,
		#[Assert\Type('float')]
		public float|null  $document_goods_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_value = null,
		#[Assert\Type('float')]
		public float|null  $document_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $document_tax_discount_value = null,
		#[Assert\Type('float')]
		public float|null  $discount_percent = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $discount_days = null,
		#[Assert\Type('bool')]
		public bool|null   $is_eu_trader = null,
		#[Assert\Type('bool')]
		public bool|null   $triangular_transaction = null,
		#[Assert\Type('array')]
		public array|null  $tax_analysis_items = null,
		#[Assert\Type('array')]
		public array|null  $nominal_analysis_items = null,
	) {
	}
}
