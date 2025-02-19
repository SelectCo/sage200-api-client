<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of purchase order information for populating a lookup.
 */
class LookupPopOrder
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $supplier_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_status_id = null,
	) {
	}
}
