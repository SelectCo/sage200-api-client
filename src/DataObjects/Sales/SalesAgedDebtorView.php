<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gets Sales aged debtor views. Specifying a query parameter of '$ageingdatetype' will produce values
 * for the specified ageing type. Acceptable values are 'transactiondate', 'duedate', and
 * 'calendarmonth', to calculate aged debt by Transaction Date, Due Date, or by calendar months.
 */
class SalesAgedDebtorView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $posted_customer_transaction_id = null,
		#[Assert\Type('float')]
		public float|null  $doc_past = null,
		#[Assert\Type('float')]
		public float|null  $doc_future = null,
		#[Assert\Type('float')]
		public float|null  $doc_current = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_1 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_2 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_3 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_4 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_5 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_6 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_7 = null,
		#[Assert\Type('float')]
		public float|null  $doc_period_8 = null,
		#[Assert\Type('float')]
		public float|null  $base_past = null,
		#[Assert\Type('float')]
		public float|null  $base_future = null,
		#[Assert\Type('float')]
		public float|null  $base_current = null,
		#[Assert\Type('float')]
		public float|null  $base_period_1 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_2 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_3 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_4 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_5 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_6 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_7 = null,
		#[Assert\Type('float')]
		public float|null  $base_period_8 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_1 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_2 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_3 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_4 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_5 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_6 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_7 = null,
		#[Assert\Type('string')]
		public string|null $aged_period_8 = null,
	) {
	}
}
