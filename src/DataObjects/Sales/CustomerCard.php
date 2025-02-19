<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer cards are the credit cards used by the customer. They are created when a transaction is
 * made using an Online Card Provider. The description used for the card can be renamed, or the card
 * removed. Multiple cards can be associated with one account. The date and time that the card was last
 * used is also recorded.
 */
class CustomerCard
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $last_used_date = null,
		#[Assert\Type('bool')]
		public ?bool $is_to_delete = null,
	) {
	}
}
