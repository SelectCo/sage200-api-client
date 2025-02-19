<?php

namespace Selectco\SageApi\DataObjects\Purchases;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Memos are sections of text that can be used to make comments about a supplier account such as
 * reminders, or notes (e.g. if there is currently a dispute over an order). These can be used to note
 * information about previous communications, or anything that should be taken into consideration when
 * contacting the supplier (e.g. there is currently a dispute over order).<br/><br/>Multiple memos can
 * be added to each account. The user that created the memo, the date it was created and last updated
 * date and time are also recorded.<br/><br/>A user can also specify if a memo is currently 'Active' or
 * 'Inactive'. This allows a user to keep a record of previous memos without deleting them.
 */
class SupplierMemo
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $supplier_id = null,
		#[Assert\Type('string'), Assert\Length(max: 1000)]
		public string|null $note = null,
		#[Assert\Type('bool')]
		public bool|null   $is_active = null,
		#[Assert\Type('bool')]
		public bool|null   $is_to_delete = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $created_by = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
