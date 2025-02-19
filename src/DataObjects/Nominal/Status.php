<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The department status.
 */
class Status
{
	public function __construct(
		#[Assert\Type('string')]
		public ?string $delete_exception_type = null,
	) {
	}
}
