<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Control nominal code types define the types of default nominal codes. This list of available types
 * is predefined by the system.</P><P>The API endpoint returns details of control nominal code types
 * that can be used.
 */
class ControlNominalCodeType
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
