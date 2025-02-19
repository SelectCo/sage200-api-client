<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bill of materials item types are used to identify how this product will be used in a bill of
 * materials within the application. Products can be 'Component', 'Subassembly', 'Phantom' or
 * 'Built/Bought'.<P>The API endpoint returns details of the bill of materials item types that can be
 * used.</P>
 */
class BomItemType
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
