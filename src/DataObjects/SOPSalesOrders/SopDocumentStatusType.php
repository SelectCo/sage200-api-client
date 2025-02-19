<?php

namespace Selectco\SageApi\DataObjects\SOPSalesOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * There are a variety of documents that are used within the Sales Ledger, each with a different status
 * type. These document status types are a pre-defined list, and are common across every instance of
 * Sage 200. <br /><br />The API endpoint returns details of the document status types that can be used
 * when reading/writing SOP documents.
 */
class SopDocumentStatusType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public int|null    $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public string|null $value = null,
	) {
	}
}
