<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * All customer/supplier addresses have an associated 'type' which defines the business function that
 * the address provides (e.g. Main address, invoice address, etc).<br /><br />Use this API endpoint to
 * return the details of the Trader Location Types that can be used.
 */
class TraderLocationType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
