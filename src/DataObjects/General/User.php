<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use this API endpoint to get a list of all usernames and IDs for the current company.
 */
class User
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 250)]
		public ?string $name = null,
	) {
	}
}
