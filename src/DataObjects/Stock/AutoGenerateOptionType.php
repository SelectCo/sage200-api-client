<?php

namespace Selectco\SageApi\DataObjects\Stock;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Auto generate option types are used to auto generate the batch or serial numbers associated with the
 * product that exist within the application. Products can be 'No automatic number generation', 'Use
 * sequence numbers', 'Use date and sequence numbers' or 'Use order number and sequence number'.<P>The
 * API endpoint returns details of the auto generate option types that can be used.</P>
 */
class AutoGenerateOptionType
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
