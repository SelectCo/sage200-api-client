<?php

namespace Selectco\SageApi\DataObjects\Commercials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All orders and returns within Sage 200 contain 'line items' that define what an order consists of
 * (e.g. items on an order). Each item on the order will have an associated 'line type' which specifies
 * the line type; standard, free text, charge or comment.<P>The API endpoint returns details of the
 * order/return line types that can be used when reading and writing orders/returns.</P>
 */
class OrderReturnLineType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
