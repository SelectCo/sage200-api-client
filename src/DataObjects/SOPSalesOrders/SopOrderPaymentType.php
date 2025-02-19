<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is used to indicate whether the payment on a sales order is a full or part payment.
 */
class SopOrderPaymentType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $value = null,
	) {
	}
}
