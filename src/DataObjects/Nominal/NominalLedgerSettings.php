<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The Nominal Ledger settings are used to configure application behaviour with respect to the Nominal
 * Ledger module.<br/><br/>Settings include whether to include additional nominal transaction
 * information for each transaction that is entered.
 */
class NominalLedgerSettings
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('bool')]
		public ?bool $allow_additional_trans_analysis = null,
		#[Assert\Type('bool')]
		public ?bool $is_consolidation_enabled = null,
		#[Assert\Type('bool')]
		public ?bool $keep_nominal_transactions = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public ?int $months_to_keep_transactions = null,
		#[Assert\Type('bool')]
		public ?bool $use_expanded_budgets = null,
		#[Assert\Type('array')]
		public ?array $budget_titles = null,
		#[Assert\Type('array')]
		public ?array $budget_profiles = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
