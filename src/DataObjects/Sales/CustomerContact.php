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
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $customer_id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $salutation_id = null,
		#[Assert\Type('string'), Assert\Length(max: 180)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $first_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $middle_name = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $last_name = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $default_telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 227)]
		public string|null $default_email = null,
		#[Assert\Type('bool')]
		public bool|null   $is_default = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('object')]
		public object|null $salutation = null,
		#[Assert\Type('array')]
		public array|null  $emails = null,
		#[Assert\Type('array')]
		public array|null  $telephones = null,
		#[Assert\Type('array')]
		public array|null  $mobiles = null,
		#[Assert\Type('array')]
		public array|null  $faxes = null,
		#[Assert\Type('array')]
		public array|null  $websites = null,
		#[Assert\Type('array')]
		public array|null  $roles = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
