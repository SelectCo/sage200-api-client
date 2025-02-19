<?php

namespace Selectco\SageApi\DataObjects\Nominal;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Departments are a subdivision of cost centres and are used where specific costs or revenue need to
 * be collated and reported on separately. For example, a cost centre could be a sales area such as
 * North East or South West and different departments could be Administration and Training.
 */
class Department
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 3)]
		public ?string $code = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $name = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $contact_name = null,
		#[Assert\Type('string'), Assert\Length(max: 235)]
		public ?string $contact_details = null,
		#[Assert\Type('string'), Assert\Length(max: 200)]
		public ?string $contact_email_address = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
		#[Assert\Type('object')]
		public ?object $status = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
