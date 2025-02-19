<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Use this API endpoint to return details of the currently logged in user.
 */
class CurrentUser
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public ?string $logon_name = null,
		#[Assert\Type('string'), Assert\Length(max: 250)]
		public ?string $friendly_name = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $email_address = null,
		#[Assert\Type('bool')]
		public ?bool $is_web_user = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_logon_date_time = null,
	) {
	}
}
