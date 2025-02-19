<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Cash Book settings are used to configure application behaviour with respect to the Cash Book
 * module.<br/><br/>Settings include the default bank account.
 */
class CashBookSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $default_bank_account_id = null,
		#[Assert\Type('object')]
		public object|null $default_bank_account = null,
	) {
	}
}
