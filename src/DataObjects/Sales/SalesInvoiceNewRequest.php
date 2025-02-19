<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Returns a sales invoice with all the default values for a customer. The API endpoint does not
 * persist the sales invoice.
 */
class SalesInvoiceNewRequest
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null $customer_id = null,
	) {
	}
}
