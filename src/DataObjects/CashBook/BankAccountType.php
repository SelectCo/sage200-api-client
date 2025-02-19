<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When working with bank accounts, it is important to know what type of bank account it is.<br /><br
 * /> Use this API endpoint to return the list of bank account types that can be used.
 */
class BankAccountType
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
