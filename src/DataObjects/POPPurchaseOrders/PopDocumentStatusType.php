<?php

namespace Selectco\SageApi\DataObjects\POPPurchaseOrders;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * There are a variety of documents that are used within the Purchase Ledger, each with a different
 * status type. These document status types are a pre-defined list, and are common across every
 * instance of Sage 200. <br /><br />The API endpoint returns details of the document status types that
 * can be used when reading/writing POP documents.
 */
class PopDocumentStatusType
{
	public function __construct(
		#[Assert\Type('int'), Assert\Length('64')]
		public ?int $id = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $description = null,
		#[Assert\Type('string'), Assert\Length(max: 20)]
		public ?string $value = null,
	) {
	}
}
