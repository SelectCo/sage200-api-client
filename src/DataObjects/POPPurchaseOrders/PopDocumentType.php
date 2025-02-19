<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * POP document types are the types of documents available in POP; the values are Order or Return.
 */
class PopDocumentType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $value = null,
	) {
	}
}
