<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of sales order information for populating a lookup.
 */
class LookupSopOrder
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $customer_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_status_id = null,
	) {
	}
}
