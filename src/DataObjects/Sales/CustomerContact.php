<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Information can be stored for multiple contacts against each customer account. Each contact can have
 * its own details such as telephone numbers, fax numbers, email address and website.
 */
class CustomerContact
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $salutation_id = null,
		#[Assert\Type('string'), Assert\Length(max: 180)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $first_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $middle_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $last_name = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public ?string $default_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public ?string $default_email = null,
		#[Assert\Type('bool')]
		public ?bool $is_default = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('object')]
		public ?object $salutation = null,
		#[Assert\Type('array')]
		public ?array $emails = null,
		#[Assert\Type('array')]
		public ?array $telephones = null,
		#[Assert\Type('array')]
		public ?array $mobiles = null,
		#[Assert\Type('array')]
		public ?array $faxes = null,
		#[Assert\Type('array')]
		public ?array $websites = null,
		#[Assert\Type('array')]
		public ?array $roles = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
