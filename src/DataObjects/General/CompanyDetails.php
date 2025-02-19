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
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $telephone = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $fax = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $email = null,
		#[Assert\Type('string'), Assert\Length(max: 255)]
		public ?string $website = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $tax_registration_number = null,
		#[Assert\Type('int'), Assert\Length('32')]
		public ?int $years_accounts_held_for = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $country_code_id = null,
		#[Assert\Type('object')]
		public ?object $country_code = null,
		#[Assert\Type('string'), Assert\Length(max: 14)]
		public ?string $eori_number = null,
		#[Assert\Type('bool')]
		public ?bool $is_supplier_payments_enabled = null,
		#[Assert\Type('object')]
		public ?object $address = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
