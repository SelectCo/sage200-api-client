<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * POP documents can be in one of a number of authorisation states. These authorisation state types are
 * a pre-defined list, and are common across every instance of Sage 200. <br /><br />The API endpoint
 * returns details of the authorisation status types that can be used when reading POP documents.
 */
class PopAuthorisationStatusType
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
