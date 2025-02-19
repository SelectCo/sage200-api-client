<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This resource returns the details of all SOP quotes. The default sort (orderby) fields are by
 * 'document_no' and 'Id' ascending.
 */
class SopQuoteView
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $document_date = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_status_id = null,
		#[Assert\Type('string'), Assert\Length(max: 30)]
		public ?string $customer_document_no = null,
		#[Assert\Type('float')]
		public ?float $total_gross_value = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $order_no = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $proforma_no = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $customer_id = null,
		#[Assert\Type('string'), Assert\Length(max: 8)]
		public ?string $customer_reference = null,
		#[Assert\Type('string'), Assert\Length(max: 60)]
		public ?string $customer_name = null,
	) {
	}
}
