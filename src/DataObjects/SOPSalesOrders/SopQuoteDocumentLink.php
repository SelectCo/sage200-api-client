<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

class SopQuoteDocumentLink
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $source_document_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $source_document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $source_document_type = null,
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $document_id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $document_no = null,
		#[Assert\Type('string'), Assert\Length(max: 50)]
		public string|null $document_type = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_created = null,
		#[Assert\Type('string'), Assert\DateTime(format: 'Y-m-d\TH:i:s\Z')]
		public string|null $date_time_updated = null,
	) {
	}
}
