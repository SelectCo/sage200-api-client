<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Statement layout types are used to determine statement production when printing documents for
 * customers within the application. Statement layout types can be 'Paper Standard', 'Paper
 * Alternative', 'Email Standard' or 'Email Alternative'.<P>The API endpoint returns details of the
 * statement layout types that can be used.</P>
 */
class StatementLayoutType
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
