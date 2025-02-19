<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nominal accounts are fundamental to the successful management of company finances as they store
 * every accounting transaction from all ledgers.</P><P>Each nominal account has an associated 'type'
 * that is used to create levels in the chart of accounts. This list of available types is predefined
 * by the system.</P><P>The API endpoint returns details of nominal account types that can be used.
 */
class NominalAccountType
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
