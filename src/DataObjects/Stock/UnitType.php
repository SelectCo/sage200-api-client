<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Unit types are used to indicate the unit of measure type within the application. The types can be
 * 'Base', 'Stock' or 'Additional'.<P>The API endpoint returns details of the unit of measure types
 * that can be used.</P>
 */
class UnitType
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
