<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is the description of the urn.
 */
class Urn
{
	public function __construct(
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $urn = null,
	) {
	}
}
