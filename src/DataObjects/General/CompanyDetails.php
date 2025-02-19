<?php

namespace Selectco\SageApi\DataObjects\General;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Every instance of Sage 200 is configured for the company using it. A company is identified in Sage
 * 200 by its name. Sage 200 stores separate company details for each company that is created.<P>The
 * information stored within company details is typical company information such as VAT registration
 * number and company contact details.</P>
 */
class CompanyDetails
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public string|null $name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $email = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public string|null $website = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public string|null $tax_registration_number = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public int|null    $years_accounts_held_for = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $country_code_id = null,
		#[Assert\Type('object')]
		public object|null $country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 14)]
		public string|null $eori_number = null,
		#[Assert\Type('bool')]
		public bool|null   $is_supplier_payments_enabled = null,
		#[Assert\Type('object')]
		public object|null $address = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
