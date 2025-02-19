<?php

namespace Selectco\SageApi\DataObjects\Sales;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Memos are comments that are made about a sales posted transaction.<br/><br/>Multiple memos can be
 * added to each sales posted transaction. The user that created the memo, the date it was created and
 * last updated date and time are also recorded.<br/><br/>A user can also specify if a memo is
 * currently 'Active' or 'Inactive'. This allows a user to keep a record of previous memos without
 * deleting them.
 */
class SalesPostedTransactionMemo
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $posted_customer_transaction_id = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public ?string $note = null,
		#[Assert\Type('bool')]
		public ?bool $is_active = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
