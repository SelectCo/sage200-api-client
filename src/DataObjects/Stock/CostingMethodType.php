<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Costing method types are used to calculate the cost of sales from your sales orders, the value of
 * stock and the transactions posted to your stock nominal accounts within the application. Product
 * groups can be 'FIFO', 'Average', 'Standard' or 'Actual'.<P>The API endpoint returns details of the
 * costing method types that can be used.</P>
 */
class CostingMethodType
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
