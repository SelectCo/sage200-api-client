<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Each contact within the system has an associated 'salutation_id' to identify if they are 'Mr', 'Ms',
 * 'Dr', etc. When working with contacts, it is important to know what this salutation_id refers to.<br
 * /><br />The API endpoint returns details of the salutations that can be used.
 */
class Salutation
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $code = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
