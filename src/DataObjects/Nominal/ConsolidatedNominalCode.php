<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * The consolidated nominal codes are the list of nominal codes from a parent company, used for
 * consolidating accounts from subsidiary ledgers.
 */
class ConsolidatedNominalCode
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $reference = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $cost_centre_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $cost_centre_code = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $department_id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public string|null $department_code = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $nominal_account_type = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
