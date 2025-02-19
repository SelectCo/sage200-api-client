<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sales transactions can be allocated against each other i.e. receipts against invoices.<br /><br
 * />This API resource can be used to determine which allocations are to be made.
 */
class SalesAllocation
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $allocation_date = null,
		#[Assert\Type('array')]
		public array|null  $allocation_lines = null,
	) {
	}
}
