<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of sales quote information for populating a lookup.
 */
class LookupSopQuote
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $customer_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_status_id = null,
	) {
	}
}
