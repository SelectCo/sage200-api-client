<?php

namespace Selectco\SageApi\DataObjects\Commercials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The list of different confirmation types.
 */
class ConfirmationIntentType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $value = null,
	) {
	}
}
