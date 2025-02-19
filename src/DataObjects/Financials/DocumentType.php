<?php

namespace Selectco\SageApi\DataObjects\Financials;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * These are the type of document used within the application. Document types can be 'Sales Order',
 * 'Sales Invoice', 'Purchase Order', 'Purchase Invoice', 'Customer Statement', 'Sales Credit Notes',
 * 'Customer Debtors Letters', 'Sales Despatch Notes', 'Sales Quotations', 'Purchase CreditNotes',
 * 'Purchase Remittance', 'Purchase Return', 'Sales Proforma', 'Draft Bill', 'Billing Invoice',
 * 'Billing Credit Note', or 'Sales Order Acknowledgement'.
 */
class DocumentType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string')]
		public ?string $description = null,
		#[Assert\Type('string')]
		public ?string $value = null,
		#[Assert\Type('bool')]
		public ?bool $is_mandatory = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $trader_contact_role_id = null,
		#[Assert\Type('string')]
		public ?string $used_in_module = null,
		#[Assert\Type('object')]
		public ?object $trader_contact_role = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
