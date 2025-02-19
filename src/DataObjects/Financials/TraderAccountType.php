<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The trader account type is used to decide how transactions are stored on individual accounts. You
 * can use all three account types in any mix. Use the account types to balance your need for a
 * detailed breakdown of transactions with your need to save disk space. (Sage 200 Professional only,
 * Sage 200 Standard defaults to 'TradingAccountTypeOpenItem')
 */
class TraderAccountType
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
