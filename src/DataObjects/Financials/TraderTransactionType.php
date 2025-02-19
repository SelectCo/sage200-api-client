<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Every transaction within Sage 200 has an associated type which defines what function that
 * transaction performs (e.g. Invoice, Purchase Receipt, Credit Note, etc). These transaction types are
 * pre-defined by the system, cannot be changed, and are common across all instances of Sage 200.<br
 * /><br />Use this API endpoint to return the details of the Trader Transaction Types that can be
 * used.
 */
class TraderTransactionType
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
