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
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $supplier_document_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_status_id = null,
	) {
	}
}
