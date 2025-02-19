<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * For every customer and supplier, users can store multiple contacts. Each contact can be associated
 * with multiple telephone numbers, mobile numbers, fax numbers, etc. When reading/writing these
 * values, the contact number type is specified.<br /><br />Use this API endpoint to return the
 * definition of a particular contact number type.
 */
class ContactNumberType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
	) {
	}
}
