<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Head office types are used to have several customers set up for the same company and statements for
 * all customers need to be sent to the head office for a customer that exists within the application.
 * Customers can be 'Independent', 'Branch', 'Head Office', 'Independent No Statement' or 'Head Office
 * No Statement'.<P>The API endpoint returns details of the head office types that can be used.</P>
 */
class HeadOfficeType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $value = null,
	) {
	}
}
