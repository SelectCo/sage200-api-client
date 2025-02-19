<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gets Sales aged transaction period views. Specifying a query parameter of '$periodnumber' will
 * produce retrospective aged period values for the period specified. For example, '$periodnumber=0'
 * will produce retrospective aged values for the current period. Specifying a query parameter of
 * '$ageingdatetype' will produce values for the specified ageing type. Acceptable values are
 * 'transactiondate', 'duedate', and 'calendarmonth', to calculate aged debt by Transaction Date, Due
 * Date, or by calendar months. The default sort (orderby) field are by 'customer_id' and
 * 'ageing_period_name' descending.
 */
class SalesAgedTransactionPeriodView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('float')]
		public ?float $base_outstanding_value = null,
		#[Assert\Type('string'), Assert\Length(max: 7)]
		public ?string $ageing_period_name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $ageing_date = null,
	) {
	}
}
