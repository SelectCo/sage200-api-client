<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product transaction types are used to identify the different types of product movement transactions.
 * These transactions are created when products are moved in and out of stock and, can be from various
 * sources such as purchase orders or sales orders.
 */
class ProductTransactionType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 25)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 25)]
		public string|null $value = null,
	) {
	}
}
