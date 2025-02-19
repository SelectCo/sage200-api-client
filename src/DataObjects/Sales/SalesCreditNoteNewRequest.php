<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a sales credit note with all the default values for a customer. The API endpoint does not
 * persist the sales credit note.
 */
class SalesCreditNoteNewRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $customer_id = null,
	) {
	}
}
