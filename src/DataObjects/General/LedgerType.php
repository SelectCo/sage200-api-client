<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Every ledger has its own unique Id in order to track which ledger a transaction is logged against.
 * These unique IDs are predefined by the system, and consistent across all Sage 200
 * installations.<P>The API endpoint returns details of the ledgers that can be used.</P>
 */
class LedgerType
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
