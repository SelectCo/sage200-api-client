<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * When working with Microsoft Flow, it is useful to be able to access pending emails to send as
 * notifications to the user from Sage 200.<br /><br />Use this API endpoint to read or write data to
 * and from the SYSPendingEmail table.
 */
class PendingEmail
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 32)]
		public ?string $email_type = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $email_address = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $email_subject = null,
		#[Assert\Type('string'), Assert\Length(max: 8000)]
		public ?string $email_body = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $user_number = null,
		#[Assert\Type('string'), Assert\Length(max: 256)]
		public ?string $user_name = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
