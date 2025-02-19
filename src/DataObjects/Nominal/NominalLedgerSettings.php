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
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $allow_additional_trans_analysis = null,
		#[Assert\Type('bool')]
		public bool|null   $is_consolidation_enabled = null,
		#[Assert\Type('bool')]
		public bool|null   $keep_nominal_transactions = null,
		#[Assert\Type('int'), Assert\Length('16')]
		public int|null    $months_to_keep_transactions = null,
		#[Assert\Type('bool')]
		public bool|null   $use_expanded_budgets = null,
		#[Assert\Type('array')]
		public array|null  $budget_titles = null,
		#[Assert\Type('array')]
		public array|null  $budget_profiles = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
