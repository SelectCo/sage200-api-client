<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopQuoteDocumentLink
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $source_document_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $source_document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $source_document_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $document_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public ?string $document_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public ?string $date_time_updated = null,
	) {
	}
}
