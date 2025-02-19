<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sage Payments Supplier Status Types indicate the status of the supplier with Supplier Payments. The
 * status types are 'Not submitted to Supplier Payments', 'Queried', 'Rejected', 'Requires Approval',
 * 'Approved' and 'Requires Submission'.<P>The API endpoint returns details of the status of the
 * supplier with Supplier Payments.</P>
 */
class SagePaymentsSupplierStatusType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
