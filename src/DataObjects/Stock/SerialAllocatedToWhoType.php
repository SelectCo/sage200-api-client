<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The serial allocated to who type, used to determine the type of allocation of a serial number.<P>The
 * API endpoint returns the following values: EnumSerialAllocatedToWhoNot,
 * EnumSerialAllocatedToWhoThis, EnumSerialAllocatedToWhoOther.</P>
 */
class SerialAllocatedToWhoType
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
