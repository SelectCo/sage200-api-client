<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fulfilment sequence types are the sequence options for the fulfilment methods used for product
 * allocation which determines how products are allocated to sales orders within the application.
 * Products can sequenced by 'Bin Priority', 'Smallest Quantity First', 'Largest Quantity First',
 * 'Oldest Sell By Date', 'Oldest Use By Date' or 'FIFO'.<P>The API endpoint returns details of the
 * fulfilment sequence types that can be used.</P>
 */
class FulfilmentSequenceType
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
