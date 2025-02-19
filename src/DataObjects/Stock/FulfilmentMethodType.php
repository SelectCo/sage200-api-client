<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fulfilment methods types are the method options for fulfilling stock on sales orders. It determines
 * how stock items are allocated to sales orders. The fulfilment methods are 'From Stock', 'Supplier
 * Via Stock' and 'Direct to Customer'.<P>The API endpoint returns details of the fulfilment method
 * types that can be used.</P>
 */
class FulfilmentMethodType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $value = null,
	) {
	}
}
