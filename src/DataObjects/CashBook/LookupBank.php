<?php

namespace Selectco\SageApi\DataObjects\CashBook;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * A subset of bank account information for populating a lookup.
 */
class LookupBank
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $account_status_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
